<?php
namespace Admin\Controller;
use Think\Controller;
class ImagesController extends Controller {
    public function index(){
		header("Content-type:text/html;charset=utf-8");
		$session = session('username');
		if(!empty($session)){
			$Images = D("Images"); // 实例化User对象
			$list = $Images->order('img_desc')->select();		 			
	
			$this->assign('images_list',$list);	
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
        
    }
	
	public function form(){			
		if($_GET['id']){	
			
			$id = I('get.id');
			$Images = M("Images");
			$image_one = $Images->where("img_id = ".$id)->find();
			
			$this->assign('image_one',$image_one);
			$this->assign('action',update);
		}else{			
			$this->assign('action',add);
		}
		$this->display();
	}
	
	public function add(){	
		// print_r($_FILES);exit;	
		if(IS_POST){		
				
			if(!empty($_FILES[img_url]['name'][0])){
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =     'Public/Upload/images/'; // 设置附件上传根目录
				// 上传文件 
				$Images = M('Images');
				$info   =   $upload->upload();
				// var_dump($info);exit;
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功
					// 保存当前数据对象	
					$Images = M("Images"); // 实例化User对象			
					$Images->create();
					$Images->img_url = 'Upload/images/'.$info['img_url']['savepath'].$info['img_url']['savename'];
					$Images->add();														
				
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
		// print_r($_POST);exit;
		if(IS_POST){
			if(!empty($_FILES[img_url]['name'][0])){
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =     'Public/Upload/images/'; // 设置附件上传根目录
				// 上传文件 
				$Images = M('Images');
				$info   =   $upload->upload();
				// var_dump($info);exit;
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功
					// 保存当前数据对象			
					$Images = M("Images"); // 实例化User对象			
					$Images->create();
					$id = I('post.img_id');
						
					$Images->img_url = 'Upload/images/'.$info['img_url']['savepath'].$info['img_url']['savename'];
					$Images->where('img_id='.$id)->save();												
						
					$this->success('修改成功！','index');
				}
			}else{
				$Images = M("Images"); // 实例化User对象			
				$Images->create();
				$id = I('post.img_id');					
				$Images->img_url = I('post.img_url');
				
				$Images->where('img_id='.$id)->save();
				$this->success('修改成功！','index');
			}				
			
		}else{
			$this->error($upload->getError());
		}
	}
	public function delete(){
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$Images = M("Images"); // 实例化User对象
			$Images->where('img_id = '.$_GET['id'])->delete(); // 删除id为5的用户数据	
			$this->success('删除成功！');
			exit;			
		}else{
			$this->error($upload->getError());
		}
	}

}