<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
		header("Content-type:text/html;charset=utf-8");
		$session = session('username');
		if(!empty($session)){
			$Goods = M("Goods");
			$goods = $Goods->limit('1')->find();
			
			$Images = M("Images");
			$images_list = $Images->where("parent_id = ".$goods['goods_id'])->select();
			// print_r($images_list);exit;
			
			$goods['url'] = 'goods/index/id/'.$goods['goods_id']; //二维码内容
			
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('goods',$goods);	
			$this->assign('images_list',$images_list);		
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
        
    }
	
	public function update(){	
		// print_r($_POST);exit;	
		if(IS_POST){
			$Goods = M("Goods"); // 实例化User对象			
			$Goods->create();
			$id = I('post.goods_id');
			$Goods->edit_time = time();
			$result = $Goods->where('goods_id='.$id)->save();	
			if($result){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$insertId = $id;

				if(!empty($_FILES[img_url]['name'][0])){
					$upload = new \Think\Upload();// 实例化上传类
					$upload->maxSize   =     0 ;// 设置附件上传大小
					$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
					$upload->rootPath  =     'Public/Upload/images/goods/'; // 设置附件上传根目录
					// 上传文件 
					$Images = M('Images');
					$info   =   $upload->upload();
					// print_r($info);exit;
					if(!$info) {// 上传错误提示错误信息
						$this->error($upload->getError());
					}else{// 上传成功
						// 保存当前数据对象
						foreach($info as $k => $v){		
							$data['parent_id'] = $insertId;							
							$data['img_desc'] = $_POST['img_desc'][$k];
							$data['img_introduce'] = $_POST['img_introduce'][$k];								
							
							$data['img_url'] = 'Public/Upload/images/goods/'.$info[$k]['savepath'].$info[$k]['savename'];
							$Images->add($data);														
						}					
						$this->success('上传成功！','index');
					}
				}else{
					$this->success('上传成功！','index');
				}
				
			}else{
				$this->error($upload->getError());
			}
		}else{
			$this->error($upload->getError());
		}
	}	
	
	public function produce(){
		if(IS_POST){
			$insertId = I('post.goods_id');
			Vendor('phpqrcode.phpqrcode');
			$Company = M("Company");
			$company_one = $Company->limit('1')->find();
			$value = 'http://'.$company_one['link'].__ROOT__.'/goods/index/id/'.$insertId; //二维码内容
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
			// print_r($insertId);exit;
			$Goods = M("Goods"); // 实例化User对象			
			// $Goods->create();
			$Goods->goods_img = $qrcode_path_new;
			$result = $Goods->where('goods_id='.$insertId)->save();
			if($result){
				$data['message'] = 0;
				$data['code'] = $qrcode_path_new;				
				$data['content'] = '修改成功！';				
			}else{
				$data['message'] = 1;
				$data['content'] = '修改失败！';
			}
			// print_r($data);exit;
			$this->ajaxReturn($data);
		}
	}
	
	public function delete(){
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$Goods = M("Goods"); // 实例化User对象
			$Goods->where('goods_id = '.$_GET['id'])->delete(); // 删除id为5的用户数据	
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
		// print_r($_POST);exit;
		if(!empty($_POST['id'])){
			$Images = M("Images"); // 实例化User对象
			$Images->where('img_id = '.$_POST['id'])->delete(); // 删除id为5的用户数据	
			$result['message'] = "删除成功！";
		}
		if(!empty($_POST['goods_id'])){
			$Images = M("Images"); // 实例化User对象
			$result['img'] = $Images->where('parent_id = '.$_POST['goods_id'])->select();			
		}
		$this->ajaxReturn($result);
	}
}