<?php
namespace Home\Controller;
use Think\Controller;
class PlateController extends Controller {
    public function index(){
		header("Content-type: text/html; charset=utf-8");
		// print_r($_GET);exit;
		$list = M('Company')->limit(1)->find();
		// 查询所有板块的分类
		$plate_menu = M('Plate')->where("parent_id = 0")->select(); 
		
		if(!empty($_GET['id'])){
			$plate_one = M('Plate')->where("plate_id = ".$_GET['id'])->find(); 
			
			// 查询所有板块信息
			$plate_all = D('Plate')->order("sort_order asc")->select();
			// print_r($plate_one);exit;
			// 查询有图的板块信息
			$Plate = M('Plate');
			$arr = $Plate->table('plate p, images i')->where('p.plate_id = i.parent_id')->field('p.*, p.parent_id as pp_id,  i.* ')->order('P.sort_order asc')->select();	
			// print_r($images_list);exit;
			$images_list = array();
			foreach($arr as $k => $v){	
				// print_r($v);
				$tmp_v = $v;	
				unset($tmp_v['plate_id']);
				if(isset($v['plate_id'])){
					$images_list[$v['plate_id']]['plate_name'] = $tmp_v['plate_name'];
					$images_list[$v['plate_id']]['pp_id'] = $tmp_v['pp_id'];
					$images_list[$v['plate_id']]['introduce'] = $tmp_v['introduce'];
					$images_list[$v['plate_id']]['customized-buttonpane'] = $tmp_v['customized-buttonpane'];
					$images_list[$v['plate_id']]['plate_id'] = $v['plate_id'];
					$images_list[$v['plate_id']]['is_show'] = $tmp_v['is_show'];
					$images_list[$v['plate_id']]['sort_order'] = $tmp_v['sort_order'];
					$images_list[$v['plate_id']]['add_time'] = $tmp_v['add_time'];
					$images_list[$v['plate_id']]['edit_time'] = $tmp_v['edit_time'];
				
					$images_list[$v['plate_id']][child][$v['img_id']]['img_id'] = $tmp_v['img_id'];
					$images_list[$v['plate_id']][child][$v['img_id']]['img_url'] = $tmp_v['img_url'];
					$images_list[$v['plate_id']][child][$v['img_id']]['img_desc'] = $tmp_v['img_desc'];
					$images_list[$v['plate_id']][child][$v['img_id']]['img_introduce'] = $tmp_v['img_introduce'];				
					
				}else{
					$images_list[$v['plate_id']] = array($tmp_v);				
				}
				
			}
			
			// 招聘信息
			$recruit = M('Recruit')->where("is_show = 0")->select();
			// print_r($images_list);exit;
			
			// 联系信息
			$data = D('Plate')->get_categories_tree(85);
			// print_r($data);exit;	
			
			// 分页
			$Plat = M('Plate');
			$count = $Plate->table('plate p, images i')->where('p.plate_id = i.parent_id and p.parent_id = 83 and p.plate_id != 125')->field('p.*, p.parent_id as pp_id, i.* ')->order('p.sort_order asc')->count();	
			// print_r($count);exit;
			// $count   = $Message->where()->count();// 查询满足要求的总记录数
			$Page    = new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			// $show    = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$page_list = $Plat->table('plate p, images i')->where('p.plate_id = i.parent_id and p.parent_id = 83 and p.plate_id != 125')->field('p.*, p.parent_id as pp_id, i.* ')->order('p.sort_order asc')->limit($Page->firstRow.','.$Page->listRows)->select();
			// print_r($page_list);exit;
			$Page -> setConfig('prev','<');
			$Page -> setConfig('next','>');
			$Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
			$Page -> setConfig('theme','%UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
			$show = $Page->show();			
		}
		// print_r($images_list);exit;
		$this->assign('page_list',$page_list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('plate_one',$plate_one);	
		$this->assign('plate_menu',$plate_menu);				
		$this->assign('images_list',$images_list);				
		$this->assign('plate_id',$_GET['id']);	
		$this->assign('company',$list);
		$this->assign('recruit_list',$recruit);
		$this->assign('data',$data);
		$this->assign('plate_all',$plate_all);
		$this->display();
	}
	
	// 详情页
	public function view(){
		header("Content-type:text/html;charset=utf-8");
		$list = M('Company')->limit(1)->find();
		$plate_menu = M('Plate')->where("parent_id = 0")->select();
		if(!empty($_GET['id'])){
			$plate_one = M('Plate')->where("plate_id = ".$_GET['id'])->find();			
			$plate_prev = M('Plate')->where("plate_id > ".$_GET['id']." and is_show = 0 and parent_id = ".$plate_one['parent_id'])->order("plate_id asc")->limit(1)->find();	
			$plate_next = M('Plate')->where("plate_id < ".$_GET['id']." and is_show = 0 and parent_id = ".$plate_one['parent_id'])->order("plate_id desc")->limit(1)->find();	
			// print_r($plate_next);exit;
			// 返回父页面
			$arr = M('Plate')->select();
			foreach($arr as $k => $v){
				$data[$v['plate_id']] .= $v['parent_id'];
			}			
			$id = $_GET['id'];
			while($data[$id]) {
			    $id = $data[$id];
			}
			// print_r($plate_prev);exit;
		}
		$this->assign('plate_one',$plate_one);
		$this->assign('plate_menu',$plate_menu);
		$this->assign('company',$list);		
		$this->assign('parent_id',$id);		
		$this->assign('plate_prev',$plate_prev);		
		$this->assign('plate_next',$plate_next);		
		$this->display();
	}
	
	// 留言板
	public function message(){
		header("Content-type:text/html;charset=utf-8");
		if(!empty($_POST)){
			// print_r($_POST);exit;
			$Message = M("Message"); // 实例化User对象			
			$Message->create();
			$Message->add_time = time();
			$result = $Message->add();
			if($result){
				$url = __CONTROLLER__."/index/id/".$_POST['plate_id'];				// print_r($url);exit;
				
				echo "<script>alert('提交成功！');window.location.href='".$url."';</script>";
				exit;
			}else{
				$this->error($upload->getError());
			}
		}
	}
	
	// 招聘
	public function recruit(){
		if(!empty($_POST['id'])){
			$Recruit = D("Recruit")->where("recruit_id = ".$_POST['id'])->find();
			// print_r($Recruit);exit;
			$Recruit['content'] = htmlspecialchars_decode($Recruit['customized-buttonpane']);
			$Recruit['add_time'] = date("Y.m.d",$Recruit['add_time']);
			$data = $Recruit;
			// print_r($data);exit;
			$this->ajaxReturn($data);
		}
	}
	
	// 搜索
	public function search(){
		header("Content-type:text/html;charset=utf-8");
		// print_r($_POST);exit;
		if(!empty($_POST)){			
			if(!empty($_POST['plate']) && !empty($_POST['search_text'])){
				
				$Plate = D("Plate")->where("plate_name = '".$_POST['plate']."'")->find();
				$arr = D('plate')->select();
				$data = D('Plate')->list_level($arr,$Plate['plate_id'],0);
				$Plate_list = D("Plate")->where("plate_name LIKE '%".$_POST['search_text']."%'")->select();
				// print_r($Plate_list);exit;
				
				foreach ($data as $k => $v){  
					foreach ($Plate_list as $x => $y){  
						if($v['plate_id'] == $y['plate_id']){  
							$list[] = $v;  
						}  
					}  
				}				
			
			}
			if(!empty($_POST['plate']) && empty($_POST['search_text'])){
				
				$Plate = D("Plate")->where("plate_name = '".$_POST['plate']."'")->find();
				// print_r($Plate);exit;			
				$arr = D('plate')->select();				
				$list = D('Plate')->list_level($arr,$Plate['plate_id'],0);	
				
			}
			if(empty($_POST['plate']) && !empty($_POST['search_text'])){
				
				$list = D("Plate")->where("plate_name LIKE '%".$_POST['search_text']."%'")->select();
				
			}		
		}	
		$new_list = array();
		if(!empty($list)){
			foreach($list as $k => $v){
				if($v['is_show'] == 0){
					$img_url = D("Images")->where("parent_id = '".$v['plate_id']."'")->field('img_url')->find();
					$new_list[$k]['img_url'] = $img_url['img_url'];
					$parent_name = D("Plate")->where("plate_id = '".$v['parent_id']."'")->field('plate_name')->find();
					$new_list[$k]['parent_name'] = $parent_name['plate_name'];
					$new_list[$k]['plate_id'] = $v['plate_id'];
					$new_list[$k]['plate_name'] = $v['plate_name'];
					$new_list[$k]['parent_id'] = $v['parent_id'];
					$new_list[$k]['introduce'] = $v['introduce'];
					$new_list[$k]['is_show'] = $v['is_show'];
					$new_list[$k]['sort_order'] = $v['sort_order'];
					// print_r($new_list);
				}
			}
		}
		// print_r($new_list);exit;
		// print_r($_POST['url']);exit;
		if(!empty($_POST['url'])){
			// print_r(strpos("Hello world!","wo"));exit;
			$str = substr(strrchr($_POST['url'], "/"), 1); //参数设定true, 返回查找值@之前的首部，abc
			$_GET['p'] = strstr($str, '.',true);
		}
		$count 		= count($new_list);
		$Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$result['show']       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$result['search_list'] = array_slice($new_list,$Page->firstRow,$Page->listRows);
		// print_r($result);exit;
		$this->ajaxReturn($result);		
	}
}