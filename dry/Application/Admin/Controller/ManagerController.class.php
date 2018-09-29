<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
    public function index(){
		header("Content-type:text/html;charset=utf-8");
		$session = session('username');
		if(!empty($session)){
			// $Manager = D("Manager"); // 实例化User对象
			// $list = $Manager->select();				
			// $this->assign('manager_list',$list);	
			
			$Manager = D('Manager'); // 实例化User对象
			$count      = $Manager->where()->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Manager->where()->order('add_time')->limit($Page->firstRow.','.$Page->listRows)->select();
			// print_r($list);exit;
			// print_r($list);exit;
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('manager_list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出	
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
        
    }
	
	public function form(){
		// $Plate = D("Plate");
		// $list = $Plate->sel_all();			
		if($_GET['id']){	
			
			$id = I('get.id');
			$Manager = D("Manager");
			$manager_one = $Manager->where("user_id = ".$id)->find();
			
			// print_r($list);exit;
			// $this->assign('plate_list',$list);
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('manager_one',$manager_one);					
			$this->assign('action',update);
		}else{
			// var_dump($list);exit;
			// $this->assign('plate_list',$list);
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('action',add);
		}
		$this->display();
	}
	
	public function add(){	
		// print_r($_POST);exit;	
		if(IS_POST){
			$Manager = D("Manager"); // 实例化User对象			
			$Manager->create();
			$Manager->add_time = time();
			$result = $Manager->add();
			if($result){
				$this->success('上传成功！','index');
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
			$Manager = D("Manager"); // 实例化User对象			
			$Manager->create();
			$id = I('post.user_id');
			$Manager->edit_time = time();
			$result = $Manager->where('user_id='.$id)->save();		
				
			if(!empty($result)){
				$this->success('修改成功！','index');	
			}else{
				$this->error($upload->getError());
			}				
			
		}else{
			$this->error($upload->getError());
		}
	}
	public function delete(){
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$Manager = D("Manager"); // 实例化User对象
			$Manager->where('user_id = '.$_GET['id'])->delete(); // 删除id为5的用户数据	
			$this->success('删除成功！');
			exit;			
		}else{
			$this->error($upload->getError());
		}
	}

}