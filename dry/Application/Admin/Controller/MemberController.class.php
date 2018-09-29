<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends Controller {
    public function index(){
		header("Content-type:text/html;charset=utf-8");
		$session = session('username');
		if(!empty($session)){
			$member_all = D("Member")->select();			
			$Member = D("Member");
			// $list = $Member->sel_all(0);
			$list = $Member->get_categories_tree();	
			$data = $Member->procHtml($list);
			// print_r($list);exit;
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('member_list',$data);
			$this->assign('member_all',$member_all);
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
        
    }
	
	public function form(){		
		$Member = D("Member");
		$list = $Member->sel_all();
		// print_r($list);exit;
		if($_GET['id']){			
			$id = I('get.id');
			$Member = M("Member");
			$member_one = $Member->where("member_id = ".$id)->find();
			
			// print_r($list);exit;
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('member_list',$list);
			$this->assign('member_one',$member_one);			
			$this->assign('action',update);
		}else{
			// var_dump($list);exit;
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('member_list',$list);
			$this->assign('action',add);
		}
		$this->display();
	}
	
	public function add(){	
		// print_r($_POST);exit;	
		if(IS_POST){
			$Member = M("Member");
			$member_one = $Member->where("member_phone = ".$_POST['member_phone'])->find();
			if(!empty($member_one)){
				$this->error('该手机号已被注册，请重新输入新的手机号。');
			}else{
				$Member = M("Member"); // 实例化User对象			
				$Member->create();
				$Member->add_time = time();			
				$result = $Member->add();				
				if($result){
					// 如果主键是自动增长型 成功后返回值就是最新插入的值
					$insertId = $result;
					$id = md5($insertId).'_'.md5(time());
					Vendor('phpqrcode.phpqrcode');
					$value = 'http://192.168.0.14'.__ROOT__.'/member/index/id/'.$id; //二维码内容
					$errorCorrectionLevel = 'L';//容错级别
					$matrixPointSize = 6;//生成图片大小
					//生成二维码图片
					$QRcode = new \QRcode();
					$qrcode_path_new = './Public/Upload/images/code'.'_'.date("Ymdhis").$insertId.'.png';//定义生成二维码的路径及名称
					$QRcode::png($value, $qrcode_path_new, $errorCorrectionLevel, $matrixPointSize, 2);
					$logo = './Public/Upload/images/logo.png';//准备好的logo图片
					 
					if ($logo !== FALSE) {
							$QR = imagecreatefromstring(file_get_contents($qrcode_path_new));
							$logo = imagecreatefromstring(file_get_contents($logo));
							$QR_width = imagesx($QR);//二维码图片宽度
							$QR_height = imagesy($QR);//二维码图片高度
							$logo_width = imagesx($logo);//logo图片宽度
							$logo_height = imagesy($logo);//logo图片高度
							$logo_qr_width = $QR_width / 5;
							$scale = $logo_width/$logo_qr_width;
							$logo_qr_height = $logo_height/$scale;
							$from_width = ($QR_width - $logo_qr_width) / 2;
							//重新组合图片并调整大小
							imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, 
							$logo_qr_height, $logo_width, $logo_height);
					}
					imagepng($QR, $logo);
				
					$Member = M("Member"); // 实例化User对象			
					// $Member->create();
					$Member->member_password = md5($_POST['member_password']);
					$Member->code_img = $qrcode_path_new;
					// print_r($insertId);exit;
					$Member->where('member_id='.$insertId)->save();
					$this->success('上传成功！','index');
					
				}else{
					$this->error($upload->getError());
				}				
			}

		}else{
			$this->error($upload->getError());
		}
	}	
	
	public function update(){	
		// var_dump($_POST);exit;
		// var_dump($_FILES);exit;
		if(IS_POST){
			$Member = M("Member"); // 实例化User对象			
			$Member->create();
			$id = I('post.member_id');
			$Member->edit_time = time();
			if(!empty($_POST['member_password'])){
				$Member->member_password = md5($_POST['member_password']);
			}
			$result = $Member->where('member_id='.$id)->save();						
			$this->success('修改成功！','index');
		}else{
			$this->error($upload->getError());
		}
	}
	public function delete(){
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$Member = M("Member"); // 实例化User对象
			$Member->where('member_id = '.$_GET['id'])->delete(); // 删除id为5的用户数据	
			$this->success('删除成功！');
			exit;			
		}else{
			$this->error($upload->getError());
		}
	}
	
	// 保存编辑器中的图片
	public function images(){
		if(!empty($_POST['img'])){			
			$url = explode(',',$_POST['img']);			
			$filename = "Public/Upload/images/cache/".date('Ymd',time()).rand(100, 999).".png";			
			file_put_contents($filename, base64_decode($url[1]));//返回的是字节数
			if(!empty($filename)){
				$result['message'] = 0;
				$result['content'] = $filename;
				$this->ajaxReturn($result);
			}
		}
	}
	
	// 删除banner图
	public function delete_img(){
		if(!empty($_POST['id'])){
			$Image = M("images"); // 实例化User对象
			$Image->where('img_id = '.$_POST['id'])->delete(); // 删除id为5的用户数据	
			$result['message'] = "删除成功！";
		}
		if(!empty($_POST['plate_id'])){
			$Image = M("images"); // 实例化User对象
			$result['img'] = $Image->where('parent_id = '.$_POST['plate_id'])->select();			
		}
		$this->ajaxReturn($result);
	}
	
	public function category(){
		$Member = D("Member"); // 实例化User对象
		// $list = $Member->get_categories_tree();	
		$list = $Member->select_all();
		// print_r($list);exit;
		$this->ajaxReturn($list);
		// $this->ajaxReturn(array('data'=>$list,'status'=>'1','info'=>'获取列表成功'));
	}
	
	public function buy(){
		$Buy = D("Buy"); // 实例化User对象
		$buy_list = $Buy->table('member m, buy b')->where('m.member_id = b.member_id')->field('m.*, b.* ')->select();
		// print_r($arr);exit;
		
		$Member = D("Member"); // 实例化User对象
		$member_list = $Member->select();
		$company = M('Company')->find();
		$this->assign('company',$company);
		$this->assign('buy_list',$buy_list);
		$this->assign('member_list',$member_list);
		$this->display();
	}
	
	public function put(){
		$put_list = M('Put')->select();
		$member_list = M('Member')->select();
		
		// print_r($put_list);exit;
		$company = M('Company')->find();
		$this->assign('company',$company);
		$this->assign('put_list',$put_list);
		$this->assign('member_list',$member_list);
		$this->display();
	}
	
	public function level(){
		if(!empty($_GET['id'])){			
			// 获取下级
			$Member = D("Member");
			$next_list = $Member->sel_all($_GET['id']);
			
			// print_r($data);exit;
			$member_list = M('Member')->select();
			
			$member = M('Member')->where('member_id = '.$_GET['id'])->find();
		}		
		$company = M('Company')->find();		
		
		$this->assign('company',$company);
		$this->assign('next_list',$next_list);
		$this->assign('member_list',$member_list);
		$this->assign('member',$member);
		$this->display();
	}
	
	public function search(){
		if(!empty($_POST['search'])){
			// print_r($_POST['member_id']);exit;
			$where['member_phone'] = array('like','%'.$_POST['search'].'%');
			// $where['member_name'] = array('like','%'.$_POST['search'].'%');
			$member = D("Member")->where($where)->find();
			// print_r($member);exit;
			$Member = D("Member");
			$list = $Member->get_categories_tree($member['member_id']);	
			$data = $Member->procHtml($list);
			// print_r($data);exit;
			$results['list'] = $data;		
			$this->ajaxReturn($results);
		}
	}
}