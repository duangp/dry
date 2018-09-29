<?php
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function index(){
		$session = session('username');
		if(!empty($session)){
			$Company = M("Company");
			$company = $Company->limit('1')->find();
			// print_r($company);exit;
			$this->assign('company',$company);
			$this->display();
		}else{
			$this->redirect('Company/index');
		}
        
    }
	
	public function update(){
		// var_dump($_POST);exit;
		if(IS_POST){
			$Company = M("Company"); // 实例化User对象
			$Company->create();
			$id = I('post.company_id');
			$result = $Company->where('company_id='.$id)->save();
			// print_r(I('post.'));exit;
			if(!empty($_FILES['logo']['name']) || !empty($_FILES['qr']['name'])){	
				$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =     'Public/Upload/images/'; // 设置附件上传根目录
				// 上传文件 
				$info   =   $upload->upload();	
				if(!$info) {// 上传错误提示错误信息
					$this->error($upload->getError());
				}else{// 上传成功
					// print_r($info);exit;
					// 保存当前数据对象
					if(!empty($info['logo']['name'])){
						$data['logo'] = 'Public/Upload/images/'.$info['logo']['savepath'].$info['logo']['savename'];	
					}
					if(!empty($info['qr']['name'])){
						$data['qr'] = 'Public/Upload/images/'.$info['qr']['savepath'].$info['qr']['savename'];
					}																
				}
			}			
				$company = M('Company')->find();
				$this->assign('company',$company);
				$Company->where('company_id='.$id)->save($data);
				$this->success('上传成功！');	
	
         }else{
             $this->error('非法请求');
         }
		 // print_r($_FILES);exit;
	}
}