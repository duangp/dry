<?php
namespace Home\Controller;
use Think\Controller;
class MemberController extends Controller {
    public function index(){
		header("Content-type: text/html; charset=utf-8");
		// print_r($_GET);exit;
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
			session('member_id', $id);
			$member = M('Member')->where("member_id = '".$id."'")->find();
			// print_r($member);exit;
			$time = md5(time());
			$member['code'] = $time.'_'.$id;
			// print_r($member);exit;
			$Buy = D("Buy"); // 实例化User对象
			// $data = $Plate->order('sort_order')->select();
			$next_list = $Buy->sel_all($id,$id);
			
			$buy_list = M('Buy')->where("member_id = '".$id."'")->select();
			
			$company = M('Company')->find();
			// print_r($company);exit;
			
			// print_r($buy_list);exit;
			$this->assign('next_list',$next_list);
			$this->assign('member',$member);
			$this->assign('company',$company);
			$this->assign('buy_list',$buy_list);
			$this->display();
		}else{
			$session = session('member_id');
			if(!empty($session)){
				$member = M('Member')->where("member_id = '".$session."'")->find();
				// print_r($member);exit;
				$time = md5(time());
				$member['code'] = $time.'_'.$session;
				// print_r($member);exit;
				$Buy = D("Buy"); // 实例化User对象
				// $data = $Plate->order('sort_order')->select();
				$next_list = $Buy->sel_all($session,$session);
				
				$buy_list = M('Buy')->where("member_id = '".$session."'")->select();
				
				$company = M('Company')->find();	
				$this->assign('next_list',$next_list);
				$this->assign('member',$member);
				$this->assign('company',$company);
				$this->assign('buy_list',$buy_list);
				$this->assign('name','index');
				$this->display();			
			}else{
				$this->redirect('Goods/index');
			}
		}
		
	}
	
	public function level(){
		$session = session('member_id');
		if(!empty($session)){
			$company = M('Company')->find();
			
			$member = M('Member')->where("member_id = '".$session."'")->find();
			if($member['is_apply'] == 0){
				$member_level = M('Member')->where("parent_id = '".$session."'")->select();
			}
			if($member['is_apply'] == 1){
				$Member = D('Member');
				$member_level = $Member->sel_all($session);				
			}

			// $buy_list = M('Buy')->where("parent_id = ".$session)->select();
			// print_r($member_level);exit;
			$member_list = M('Member')->select();
			
			$this->assign('company',$company);
			$this->assign('member_level',$member_level);
			$this->assign('member_list',$member_list);
			$this->display();
		}else{
			$this->redirect('Goods/index');
		}
	}
	
	public function menu(){
		$session = session('member_id');
		if(!empty($session)){
			$Buy = D('Buy');
			$buy_list = M('Buy')->where("member_id = '".$session."'")->select();
			$member_list = M('Member')->select();
			$company = M('Company')->find();
			// print_r($buy_list);exit;
			$this->assign('company',$company);
			$this->assign('member_list',$member_list);
			$this->assign('buy_list',$buy_list);
			$this->display();
		}else{
			$this->redirect('Goods/index');
		}

	}
	
	public function edit(){
		$session = session('member_id');		
		if(!empty($session)){
			// print_r($_POST);exit;
			if(!empty($_POST)){
				$Member = M("Member"); // 实例化User对象			
				$Member->create();
				$Member->member_name = $_POST['member_name'];		
				$Member->member_address = $_POST['provinceName'].$_POST['cityName'].$_POST['districtName'].$_POST['member_address'];		
				$results = $Member->where("member_id = '".$session."'")->save();
				if($results){
					echo "<script>document.write(修改成功！'); </script>";					
				}
				$this->redirect('Member/edit');
			}else{
				$company = M('Company')->find();
				$member = M('Member')->where("member_id = '".$session."'")->find();
				
				$this->assign('company',$company);
				$this->assign('member',$member);
				$this->display();				
			}
		}else{
			$this->redirect('Goods/index');
		}
	}
	
	public function apply(){
		if(!empty($_POST['id'])){
			$Member = M("Member"); // 实例化User对象			
			$Member->create();
			$Member->is_apply = 1;		
			$results = $Member->where("member_id = '".$_POST['id']."'")->save();
			if($results){
				$result['message'] = "申请成功！";
				$this->ajaxReturn($result);
			}
		}
	}
	
	public function change(){
		$session = session('member_id');
		if(!empty($session)){
			if(!empty($_POST)){
				// print_r($_POST);exit;
				$Member = M("Member"); // 实例化User对象			
				$Member->create();
				if(!empty($_POST['member_password'])){
					$Member->member_password = md5($_POST['member_password']);
				}				
				$Member->edit_time = time();
				$results = $Member->where("member_id = '".$session."'")->save();
				if(!empty($results)){
					$member = M('Member')->where("member_id = '".$session."'")->find();
					$result['member_name'] = $member['member_name'];
					$result['error'] = 1;
					$result['message'] = "修改成功！";
					$this->ajaxReturn($result);
				}
			}
		}
	}
	
	public function destroy(){
		session('[destroy]'); // 销毁session
		// echo "<script>document.write(成功退出！'); window.location.href='index'; </script>";
		// $this->redirect('Goods/index');
		$result['message'] = "成功退出！";
		$this->ajaxReturn($result);
	}
	
	public function weixin_login(){
		import('Org.Util.WeChatAuth');
		$Wechat = new \WeChatAuth();
		echo "<pre>";
		$token = session('token'); //查看是否已经授权
		// print_r($token);exit;
		if (!empty($token)) {
			var_dump('TOKEN:');
			var_dump($token);
			$state = $Wechat->check_access_token($token['access_token'],$token['openid']); //检验token是否可用(成功的信息："errcode":0,"errmsg":"ok")
			// print_r($state);exit;
			var_dump('检验token是否可用:');
			var_dump($state);
		}
		$url = $Wechat->get_authorize_url('http://cs.tamenn.com/weidu/Member/test2','1'); //此处链接授权后，会跳转到下方处理
		echo '<a href='.$url.'>点击授权登陆</a></pre>';
	}

	public function test2(){
		import('Org.Util.WeChatAuth');
		$Wechat = new \WeChatAuth();
		$token = $Wechat->get_access_token('','',$_GET['code']); //确认授权后会，根据返回的code获取token
		session('token',$token); //保存授权信息
		$user_info = $Wechat->get_user_info($token['access_token'],$token['openid']); //获取用户信息
		echo "登录成功：用户信息：<pre>";
		var_dump($user_info);
		echo '</pre>';
	}
	
	/**
     * 支付宝授权登录
     */
    public function aliLogin(){
        /* 获取配置文件的ali参数 */
        $ali_config = C("ALI_CONFIG");

        /* 应用的APPID */
        $app_id = "2018080160797874";
        /* 【成功授权】后的回调地址 */
        $my_url = "http://".$_SERVER['HTTP_HOST']."/member/aliLogin";

        /* Step1：获取auth_code */
        $auth_code = $_REQUEST["auth_code"];//存放auth_code
		// print_r($auth_code);exit;
        if(empty($auth_code)){
            /* state参数用于防止CSRF攻击，成功授权后回调时会原样带回 */
            $_SESSION['alipay_state'] = md5(uniqid(rand(), TRUE));
            /* 拼接请求授权的URL */
            $url = "https://openauth.alipay.com/oauth2/publicAppAuthorize.htm?app_id=".$app_id."&scope=auth_user&redirect_uri=".$my_url."&state="
                . $_SESSION['alipay_state'];

            echo("<script> top.location.href='" . $url . "'</script>");
        }
        /* Step2: 使用auth_code换取apauth_token */
        if($_REQUEST['state'] == $_SESSION['alipay_state'] || 1)
        {
            vendor('alipay.aop.AopClient');
            $aop = new \AopClient();
            $aop->gatewayUrl = "https://openapi.alipay.com/gateway.do";
            $aop->appId = $app_id;
            $aop->rsaPrivateKey = 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCCaQP8Lxv1VsOO837BepnxaLFHb1HEETEpCCEqGF+J2eGbpLb6kIomFtn12MI7ZN9testuQ7xZ8A3Hy48CNfHVPDFSx0QMscb2jFvMemPUCEQ0dY9+5d2OjqG+3ijwZalcbEPlJnGdWnoKeid1ZkyYiXiAR3lROn6YpkgTBoIgGdFGTHfMxYxbDo+hLP2nr/qRoI480OAdGvMj98ufOR1rew/iuPl7IE7M4yNW7g3hFPir/hDbW4ywUDWs0fLiKnjzLTsUeL7UWFFay4wd5QnHhfKtId+pe4uxs36MtpDKFNHSy8Xr8EUWyYg1cKf8LxMHBIgldVkJXdcuFxMNoJ4pAgMBAAECggEANCDwU90s6twc3cadk4+De8lim/B2mc5ZfVJfl2kYv4zVrxafgfdHEcSuqaRUt9MxsJyWNuRipPzdNVE8QCD6I0elW7aFkCF8K8+dXlZKE1aelO2tR4dxEewX4akCal3o3iX02eONJN4mzItZvIcA9TR2c6ieaQbd1f0Z8Gj4mQXGoz7VCz/XZ22AdD+WdUZ8zuhFYn0YGRn+f7ufiBDUQ3wBJ+Oa1VFgrIfEiGUJR9vRmPHqAyiXSqT937tNyDg7YGu2ZtsU/FxJjsKoBLr7h7wjUVY3TGvItTIinSQC/RkbwQ1BJsMgLNSVuLP6RPkktm9FRQkHdoVd3UnYDw4m5QKBgQDBAYXV30TkVWFw3y73DAcXGKJqEgSI9jIgnDtv2Izz1gS9WQu3gG1eL2P/Iq8uim6iFXHD6fqiQbZD8pFg//Ub+GDAbDzwRE/yAIoB1ROcXxh4XVgeWVWof2IHHGkbk4I8a4QKjsrJmth2b5uPjxGL3Jo2oaLQnyfhvv1D70z7XwKBgQCs+VmkLy6acjJLrsAm0/oYD/EXuEivUGakaJTCYuLOC5+6+TBN8OzAdYs/mn7TBFGZjIRRMWtKEcN1/GreSWHcDMJO3193hKLAyjGGnbpaVeSobnAg/tBcV3QrT61Zrx7TGl0j/mIv9LexJLF3cOIi2+0F9rhPNp2eFZ7VWqNbdwKBgEwN7pA9n+ceIfyZZedh7PVT9sQ3f2P9J/mjtuQ3ACwhvNJkYXKY///qSsxB/agoUro6Gw9phyMjI9CYqGMB2bOA55dLz6OaN6qUPc3FCipHatwbZFrpNxDjyVwl/OEp+lsWvvxuEkjpZL0e87zZUr+7WWWHwiHVZaDWYvS/OqWfAoGAVO8LKSdRxtyT/b2M9IPZpb8OLwt6BTuBavE/OkO8AliK0hBRu7O1TLtq6IxAAfV46+CniAawG+qlA2YyQ3vc5WQOdRQRmGo0UF33+5WvT3Qllt7DiDAWt4DpteqlwAfRJu8nFOlv5QRQvla6HV/8agl7VRZUYfD7bAhJuZGL7PkCgYEArkCczFcFaH+qgzuMdanNVb0zztKE9yc+zieA5Cqf/WwfLEsOkrh2mY1nLsuu8mjDRsTPfm7banIXBN+01X8YOykKCxkrCwTNTGP6kbpP+T1WE3Qe7Iad1+FeKVcf4UjJF+UmhZ1TMlQRBscJIuYKgajP5zSp7XYbCNGp8duSy60=';
            $aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsQfgYI3CgOGiZqnsDQw1XLAIgL6dGy59/8slcsDQBbcQGQ9mK02yXfuI9bonqk3ORbSVTq/8D8A9G3e0cqza9YZXZtN7alq9tlXtlWMbyS4oDJYaP1glz20RlSylvy1dtHM44F2r5ZDj03wXNllsVoO88KFpxAz2QbELrVivXh/VwyefUPaYHbKiqXpO6huybJbXVzDSeIUnuGbeVGx9D/9+7r4etqdkm0fn2wzf4tNMlVFISmL/CAmTPTYVgy7oKVggX1H3x9ATACaCNAfx2vnC21zW065BNaJBm48i1Cmo+XPmY/80j50OHbbjK+WxkxGYrSzxucoNwVCTsMPkKQIDAQAB';
            $aop->apiVersion = '1.0';
            $aop->signType = 'RSA2';
            $aop->postCharset = 'utf-8';
            $aop->format = 'json';

            /* 根据返回的auth_code换取access_token */
            vendor("alipay.aop.request.AlipaySystemOauthTokenRequest");
            $request = new \AlipaySystemOauthTokenRequest();
            $request->setGrantType("authorization_code");
            $request->setCode($auth_code);
            $result = $aop->execute($request);
            $access_token = $result->alipay_system_oauth_token_response->access_token;

			/* Step3: 用access_token获取用户信息 */
            vendor("alipay.aop.request.AlipayUserInfoShareRequest");
            $request = new \AlipayUserInfoShareRequest();
            $result = $aop->execute ( $request, $access_token);
			// print_r($result);exit;
            $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";			
            $resultCode = $result->$responseNode->code;
			// print_r($result);exit;
            if(!empty($resultCode)&&$resultCode == 10000){				
                $user_data = $result->$responseNode;
				// print_r($user_data);exit;
                // $m = M("Member");
                /* $data = array();
                $data['sex']           = $user_data->gender=='m'?1:2;
                $data['province']      = $user_data->province;
                $data['city']          = $user_data->city;
                $data['person_name']   = $user_data->nick_name;
                $data['ali_openid']    = $user_data->user_id;
                $data['ali_name']      = $user_data->nick_name;
                $data['ali_img']       = $user_data->avatar;
                $data['addtime']       = date("Y-m-d H:i:s", time());
                $data['person_img']       = $user_data->avatar;
                $data['signtime']       = date("Y-m-d H:i:s", time()); */
				$member_id = session('member_id');
                $user = M("Member")->where("member_id = '".$member_id."'")->find();
				
				$Put = M("Put");
				$Put->create();
				$Put->put_mode = 2;
				$Put->member_id = $member_id;
				$Put->put_money = $user['member_money'];
				$Put->put_name = $user['member_name'];
				$Put->user_id = $user_data->user_id;
				$Put->put_time = time();
				$result_id = $Put->add();
				
				$out_id = md5(time()).'_'.$result_id;
				$goods = M('Goods')->find();
				$user_id = $user_data->user_id;
				$nick_name = $user_data->nick_name;
				$member_money = $user['member_money'];
				$goods_name = $goods['goods_name'];
				vendor("alipay.aop.request.AlipayFundTransToaccountTransferRequest");
				$request2 = new \AlipayFundTransToaccountTransferRequest();
				$request2->setBizContent("{" .
				"\"out_biz_no\":\"$out_id\"," .
				"\"payee_type\":\"ALIPAY_USERID\"," .
				"\"payee_account\":\"$user_id\"," .
				"\"amount\":\"$member_money\"," .
				"\"payer_show_name\":\"$goods_name\"," .
				// "\"payee_real_name\":\"$nick_name\"," .
				"\"remark\":\"余额返现\"" .
				"}");
				// print_r($request);exit;
				$result2 = $aop->execute ($request2);
				// print_r($result2);exit;
				$responseNode2 = str_replace(".", "_", $request2->getApiMethodName()) . "_response";
				$resultCode2 = $result2->$responseNode2->code;
				// session('alipay_state',null);
				// print_r($resultCode2);exit;
				if(!empty($resultCode2)&&$resultCode2 == 10000){
				    $Put = M("Put"); // 实例化User对象			
				    $Put->create();
				    // $Put->pay_time = time();
				    $Put->is_success = '1';
				    $Put->where('put_id='.$result_id)->save();
					
				    $Member = M("Member"); // 实例化User对象			
				    $Member->create();
				    $Member->member_money = 0;
				    $Member->where("member_id = '".$member_id."'")->save();
					session('alipay_state',null);	 
					echo("<script> alert('提现成功！');</script>");					
					$this->redirect('Member/index/id/'.$member_id);
					
				} else {
					echo "失败";
					session('alipay_state',null);
					$this->redirect('Member/index/id/'.$member_id);
				}

            } else {
                $this->error("操作异常，拒绝访问！", U('member/index'));
            }

        }
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