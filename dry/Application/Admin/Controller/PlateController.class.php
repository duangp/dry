<?php
namespace Admin\Controller;
use Think\Controller;
class PlateController extends Controller {
    public function index(){
		header("Content-type:text/html;charset=utf-8");
		$session = session('username');
		if(!empty($session)){
			$Plate = D("Plate"); // 实例化User对象
			// $data = $Plate->order('sort_order')->select();
			$data = M('Plate')->select();  
			// $list = $Plate->find_level($data);	
			// $list = $Plate->sel_all();	
			$list = $Plate->get_categories_tree();	
			// print_r($list);exit;;
			$this->assign('plate_list',$list);	
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
        
    }
	
	public function form(){		
		$Plate = D("Plate");
		$list = $Plate->sel_all();			
		if($_GET['id']){	
			
			$id = I('get.id');
			$Plate = M("Plate");
			$plate_one = $Plate->where("plate_id = ".$id)->find();
			
			$Images = M("Images");
			$images = $Images->where("parent_id = ".$id)->select();
			// print_r($list);exit;
			$this->assign('plate_list',$list);
			$this->assign('plate_one',$plate_one);		
			$this->assign('images',$images);		
			$this->assign('action',update);
		}else{
			// var_dump($list);exit;
			$this->assign('plate_list',$list);
			$this->assign('action',add);
		}
		$this->display();
	}
	
	public function add(){	
		// print_r($_POST);exit;	
		if(IS_POST){
			$Plate = M("Plate"); // 实例化User对象			
			$Plate->create();
			$Plate->add_time = time();
			$result = $Plate->add();
			if($result){
				// 如果主键是自动增长型 成功后返回值就是最新插入的值
				$insertId = $result;
				
				if(!empty($_FILES[img_url]['name'][0])){
					$upload = new \Think\Upload();// 实例化上传类
					$upload->maxSize   =     0 ;// 设置附件上传大小
					$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
					$upload->rootPath  =     'Public/Upload/images/'; // 设置附件上传根目录
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
							
							$data['img_url'] = 'Public/Upload/images/'.$info[$k]['savepath'].$info[$k]['savename'];
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
	
	public function update(){	
		// var_dump($_POST);exit;
		// var_dump($_FILES);exit;
		if(IS_POST){
			$Plate = M("Plate"); // 实例化User对象			
			$Plate->create();
			$id = I('post.plate_id');
			$Plate->edit_time = time();
			$result = $Plate->where('plate_id='.$id)->save();		
				
			if(!empty($_FILES[img_url]['name'][0])){
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     0 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =     'Public/Upload/images/'; // 设置附件上传根目录
				// 上传文件 
				$Images = M('Images');
				$info   =   $upload->upload();
				// print_r($info);exit;
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功
					// 保存当前数据对象
					foreach($info as $k => $v){		
						$data['parent_id'] = $id;
						$data['img_desc'] = $_POST['img_desc'][$k];
						$data['img_introduce'] = $_POST['img_introduce'][$k];						
						
						$data['img_url'] = 'Public/Upload/images/'.$info[$k]['savepath'].$info[$k]['savename'];
						$Images->add($data);														
					}	
					$this->success('上传成功！','index');
				}
			}else{
				$this->success('修改成功！','index');
			}				
			
		}else{
			$this->error($upload->getError());
		}
	}
	public function delete(){
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$Plate = M("Plate"); // 实例化User对象
			$Plate->where('plate_id = '.$_GET['id'])->delete(); // 删除id为5的用户数据	
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
}