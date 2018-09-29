<?php
namespace Admin\Controller;
use Think\Controller;
class RecruitController extends Controller {
    public function index(){
		header("Content-type:text/html;charset=utf-8");
		$session = session('username');
		if(!empty($session)){
			// print_r($_GET);exit;
			$Recruit = M('Recruit'); // 实例化User对象
			$count      = $Recruit->where()->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Recruit->where()->order('add_time')->limit($Page->firstRow.','.$Page->listRows)->select();
			// print_r($list);exit;
			$this->assign('recruit_list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出			
			
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
        
    }
	
	public function form(){	
		// print_r($_GET);exit;
		if($_GET['id']){			
			$id = I('get.id');
			$Recruit = M("recruit");
			$recruit_one = $Recruit->where("recruit_id = ".$id)->find();
		
			$this->assign('recruit_one',$recruit_one);		
			$this->assign('action',update);
		}else{
			// var_dump($list);exit;
			// $this->assign('plate_list',$list);
			$this->assign('action',add);
		}
		$this->display();
	}
	
	public function add(){	
		// print_r($_POST);exit;	
		if(IS_POST){
			$Recruit = M("Recruit"); // 实例化User对象			
			$Recruit->create();
			$Recruit->add_time = time();
			$result = $Recruit->add();
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
			$Recruit = M("Recruit"); // 实例化User对象			
			$Recruit->create();
			$id = I('post.recruit_id');
			$Recruit->edit_time = time();
			$result = $Recruit->where('recruit_id='.$id)->save();	
			$this->success('修改成功！','index');	
		}else{
			$this->error($upload->getError());
		}
	}
	
	public function delete(){
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$Recruit = M("Recruit"); // 实例化User对象
			$Recruit->where('recruit_id = '.$_GET['id'])->delete(); // 删除id为5的用户数据	
			$this->success('删除成功！');	
		}else{
			$this->error($upload->getError());
		}
	}
}