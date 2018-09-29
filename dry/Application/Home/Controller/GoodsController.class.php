<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
		header("Content-type: text/html; charset=utf-8");
		if(!empty($_GET['code'])){
			$Goods = M("Goods");
			$goods_one = $Goods->find();
			// print_r($goods_one);exit;
			$parent_id = trim(strrchr($_GET['code'], '_'),'_');
			session('parent_id', $parent_id);
			// print_r($id);exit;
			// print_r($goods_one);exit;
			$image_list = M("Images")->select();
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('goods_one',$goods_one);
			// $this->assign('parent_id',$parent_id);
			$this->assign('image_list',$image_list);
		}else{
			// $back_money = 0.01*50/100;
			// print_r($back_money);exit;
			$Goods = M("Goods");
			$goods_one = $Goods->find();
			// print_r($goods_one);exit;	
			$image_list = M("Images")->select();
			// print_r($image_list);exit;
			$company = M('Company')->find();
			$this->assign('company',$company);
			$this->assign('image_list',$image_list);				
			$this->assign('goods_one',$goods_one);				
		}
		$this->display();
	}

	public function update_cart(){
		if(!empty($_POST['goods_number'])){
			if($_POST['id'] == 1){
				$goods = M("Goods")->find();
				$total_price = $goods['goods_price']*$_POST['goods_number'];
				$total_price = number_format($total_price,2);
				$results['total_price'] = $total_price;				
			}
			if($_POST['id'] == 2){
				$goods = M("Goods")->find();
				$total_price = $goods['goods_price']*$_POST['goods_number'];
				$total_price = number_format($total_price,2);
				$results['total_price'] = $total_price;				
			}
			if($_POST['id'] == 3){
				$goods = M("Goods")->find();
				$total_price = $goods['goods_price']*$_POST['goods_number'];
				$total_price = number_format($total_price,2);
				$results['total_price'] = $total_price;				
			}

			$this->ajaxReturn($results);
		}
	}
	
	// 购买确认页
	public function buy(){
		// print_r($_POST);exit;
		if(!empty($_POST)){
			$goods = M('Goods')->find();
			$total_price = $goods['goods_price']*$_POST['goods_number'];
			$company = M('Company')->find();
			$images = M("Images")->select();
			session('total_price', $total_price);
			session('goods_number', $_POST['goods_number']);
			
			$this->assign('images',$images);
			$this->assign('company',$company);
			$this->assign('goods_number',$_POST['goods_number']);
			$this->assign('total_price',$total_price);
			$this->assign('goods',$goods);
			$this->display();
		}
	}
	
	public function _initialize()
    {
        //引入WxPayPubHelper
        vendor('WxPayPubHelper.WxPayPubHelper');

    }
	
	public function pay(){
		if(!empty($_POST)){
			// print_r($_POST);exit;
			session('member_name', $_POST['member_name']);
			session('member_phone', $_POST['member_phone']);
			$address = $_POST['provinceName'].$_POST['cityName'].$_POST['districtName'].$_POST['member_address'];
			session('member_address', $address);
			// print_r(session());exit;
								
			if($_POST['pay_mode'] == 1){		
				$code_url = "";
				// print_r($code_url);exit;
				$company = M('Company')->find();
				
				$code_url = "http://{$company['link']}/index.php/Goods/jsapi";
				
				$this->assign('company',$company);
				$this->assign('code_url',$code_url);
				
				$this->display();
			}
			if($_POST['pay_mode'] == 2){		
				vendor('alipay.config');
				vendor('alipay.pagepay.service.AlipayTradeService');
				vendor('alipay.pagepay.buildermodel.AlipayTradePagePayContentBuilder');
				// require_once dirname(dirname(__FILE__)).'/config.php';
				// require_once dirname(__FILE__).'/service/AlipayTradeService.php';
				// require_once dirname(__FILE__).'/buildermodel/AlipayTradePagePayContentBuilder.php';
				$company = M('Company')->find();	
				$config = array (	
						//应用ID,您的APPID。
						'app_id' => "2018080160797874",

						//商户私钥
						'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCCaQP8Lxv1VsOO837BepnxaLFHb1HEETEpCCEqGF+J2eGbpLb6kIomFtn12MI7ZN9testuQ7xZ8A3Hy48CNfHVPDFSx0QMscb2jFvMemPUCEQ0dY9+5d2OjqG+3ijwZalcbEPlJnGdWnoKeid1ZkyYiXiAR3lROn6YpkgTBoIgGdFGTHfMxYxbDo+hLP2nr/qRoI480OAdGvMj98ufOR1rew/iuPl7IE7M4yNW7g3hFPir/hDbW4ywUDWs0fLiKnjzLTsUeL7UWFFay4wd5QnHhfKtId+pe4uxs36MtpDKFNHSy8Xr8EUWyYg1cKf8LxMHBIgldVkJXdcuFxMNoJ4pAgMBAAECggEANCDwU90s6twc3cadk4+De8lim/B2mc5ZfVJfl2kYv4zVrxafgfdHEcSuqaRUt9MxsJyWNuRipPzdNVE8QCD6I0elW7aFkCF8K8+dXlZKE1aelO2tR4dxEewX4akCal3o3iX02eONJN4mzItZvIcA9TR2c6ieaQbd1f0Z8Gj4mQXGoz7VCz/XZ22AdD+WdUZ8zuhFYn0YGRn+f7ufiBDUQ3wBJ+Oa1VFgrIfEiGUJR9vRmPHqAyiXSqT937tNyDg7YGu2ZtsU/FxJjsKoBLr7h7wjUVY3TGvItTIinSQC/RkbwQ1BJsMgLNSVuLP6RPkktm9FRQkHdoVd3UnYDw4m5QKBgQDBAYXV30TkVWFw3y73DAcXGKJqEgSI9jIgnDtv2Izz1gS9WQu3gG1eL2P/Iq8uim6iFXHD6fqiQbZD8pFg//Ub+GDAbDzwRE/yAIoB1ROcXxh4XVgeWVWof2IHHGkbk4I8a4QKjsrJmth2b5uPjxGL3Jo2oaLQnyfhvv1D70z7XwKBgQCs+VmkLy6acjJLrsAm0/oYD/EXuEivUGakaJTCYuLOC5+6+TBN8OzAdYs/mn7TBFGZjIRRMWtKEcN1/GreSWHcDMJO3193hKLAyjGGnbpaVeSobnAg/tBcV3QrT61Zrx7TGl0j/mIv9LexJLF3cOIi2+0F9rhPNp2eFZ7VWqNbdwKBgEwN7pA9n+ceIfyZZedh7PVT9sQ3f2P9J/mjtuQ3ACwhvNJkYXKY///qSsxB/agoUro6Gw9phyMjI9CYqGMB2bOA55dLz6OaN6qUPc3FCipHatwbZFrpNxDjyVwl/OEp+lsWvvxuEkjpZL0e87zZUr+7WWWHwiHVZaDWYvS/OqWfAoGAVO8LKSdRxtyT/b2M9IPZpb8OLwt6BTuBavE/OkO8AliK0hBRu7O1TLtq6IxAAfV46+CniAawG+qlA2YyQ3vc5WQOdRQRmGo0UF33+5WvT3Qllt7DiDAWt4DpteqlwAfRJu8nFOlv5QRQvla6HV/8agl7VRZUYfD7bAhJuZGL7PkCgYEArkCczFcFaH+qgzuMdanNVb0zztKE9yc+zieA5Cqf/WwfLEsOkrh2mY1nLsuu8mjDRsTPfm7banIXBN+01X8YOykKCxkrCwTNTGP6kbpP+T1WE3Qe7Iad1+FeKVcf4UjJF+UmhZ1TMlQRBscJIuYKgajP5zSp7XYbCNGp8duSy60=",
						
						//异步通知地址
						// 'notify_url' => "http://cs.tamenn.com/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
						
						//同步跳转
						'return_url' => "http://{$company['link']}/Goods/return_url",

						//编码格式
						'charset' => "UTF-8",

						//签名方式
						'sign_type'=>"RSA2",

						//支付宝网关
						'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

						//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
						'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsQfgYI3CgOGiZqnsDQw1XLAIgL6dGy59/8slcsDQBbcQGQ9mK02yXfuI9bonqk3ORbSVTq/8D8A9G3e0cqza9YZXZtN7alq9tlXtlWMbyS4oDJYaP1glz20RlSylvy1dtHM44F2r5ZDj03wXNllsVoO88KFpxAz2QbELrVivXh/VwyefUPaYHbKiqXpO6huybJbXVzDSeIUnuGbeVGx9D/9+7r4etqdkm0fn2wzf4tNMlVFISmL/CAmTPTYVgy7oKVggX1H3x9ATACaCNAfx2vnC21zW065BNaJBm48i1Cmo+XPmY/80j50OHbbjK+WxkxGYrSzxucoNwVCTsMPkKQIDAQAB",
				);
					$timeStamp = time();
					// $out_trade_no = C('WxPay.pub.config.APPID')."$timeStamp";
					//商户订单号，商户网站订单系统中唯一订单号，必填
					$out_trade_no = trim($timeStamp);
					session('out_trade_no', $out_trade_no);
					
					$Goods = M("Goods");
					$goods = $Goods->find();
					//订单名称，必填
					$subject = trim($goods['goods_name']);

					//付款金额，必填
					$total_amount = trim($_SESSION['total_price']);

					//商品描述，可空
					// $body = trim($_POST['WIDbody']);

					//构造参数
					$payRequestBuilder = new \AlipayTradePagePayContentBuilder();
					// $payRequestBuilder->setBody($body);
					$payRequestBuilder->setSubject($subject);
					$payRequestBuilder->setTotalAmount($total_amount);
					$payRequestBuilder->setOutTradeNo($out_trade_no);

					$aop = new \AlipayTradeService($config);

					/**
					 * pagePay 电脑网站支付请求
					 * @param $builder 业务参数，使用buildmodel中的对象生成。
					 * @param $return_url 同步跳转地址，公网可以访问
					 * @param $notify_url 异步通知地址，公网可以访问
					 * @return $response 支付宝返回的信息
					*/
					$response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);

					//输出表单
					var_dump($response);
				
			}
		}
	}
	
	/* public function jsapi(){
		$this->display();
	} */
	
	public function jsapi(){
		vendor('php_sdk.lib.WxPay#Api');
		vendor('php_sdk.example.WxPay#JsApiPay');
	
		try{
			// print_r('123');exit;
			$tools = new \JsApiPay();
			$openId = $tools->GetOpenid();
			// print_r($openId);exit;
			session('login_id', $openId);
			//②、统一下单
			$goods = M('Goods')->find();				
			$company = M('Company')->find();
			$timeStamp = md5(time());
			session('out_trade_no', $timeStamp);
			$total_price = $_SESSION['total_price']*100;
			$input = new \WxPayUnifiedOrder();
			$input->SetBody($goods['goods_name']);
			$input->SetAttach("test");
			$input->SetOut_trade_no($timeStamp);
			$input->SetTotal_fee($total_price);
			$input->SetTime_start(date("YmdHis"));
			$input->SetTime_expire(date("YmdHis", time() + 600));
			$input->SetGoods_tag($goods['goods_name']);
			$input->SetNotify_url("http://paysdk.weixin.qq.com/notify.php");
			$input->SetTrade_type("JSAPI");
			$input->SetOpenid($openId);
			// vendor('php_sdk.example.WxPay#Config');
			// $config = new \WxPayConfig();
			// $order = WxPayApi::unifiedOrder($config, $input);
			$order = $tools->GetOrder($input);
			
			// echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
			// print_r($order);exit;
			$jsApiParameters = $tools->GetJsApiParameters($order);
			// print_r($jsApiParameters);exit;
			//获取共享收货地址js函数参数
			$editAddress = $tools->GetEditAddressParameters();
			$this->assign('jsApiParameters',$jsApiParameters);
			$this->assign('goods_name',$goods['goods_name']);
			$this->assign('total_price',$_SESSION['total_price']);
			$this->assign('timeStamp',$timeStamp);
			$this->assign('company_names',$company['company_name']);
			$this->display();
		} catch(Exception $e) {
			Log::ERROR(json_encode($e));
		}
	}
	
	public function jsapi_skr(){
		// print_r($_SESSION);exit;
		if(!empty($_SESSION['out_trade_no'])){
		  // print_r('456');
		  $buy = M('Buy')->where("out_trade_no = '".$_SESSION['out_trade_no']."'")->find();
		  // print_r($buy);exit;
		  if(!empty($buy)){
			  $id = $buy['member_id'];
			  // $this->redirect('Member/index/id/'.$id);
			  $results['message'] = "支付成功！";
			  $results['id'] = $id;
		  }else{
			  $member = M('Member')->where("login_id = '".$_SESSION['login_id']."' and login_mode = 1")->find();
			  // print_r($member);exit;
			  if(!empty($member)){
				  $id = $member['member_id'];
				  $Member = M("Member"); // 实例化User对象			
				  $Member->create();
				  $Member->member_phone = $_SESSION['member_phone'];
				  $Member->member_name = $_SESSION['member_name'];
				  $Member->member_address = $_SESSION['member_address'];
				  $Member->where('member_id='.$id)->save();
			  }else{
				  $Member = M("Member"); // 实例化User对象			
				  $Member->create();
				  $Member->login_mode = 1;
				  $Member->member_phone = $_SESSION['member_phone'];
				  $Member->is_open = 0;
				  $Member->member_name = $_SESSION['member_name'];
				  $Member->member_address = $_SESSION['member_address'];
				  if(!empty($_SESSION['parent_id'])){
				  $Member->parent_id = $_SESSION['parent_id'];
				  }					  	  
				  $Member->login_mode = 1;
				  $Member->login_id = $_SESSION['login_id'];
				  $Member->add_time = time();
				  $id = $Member->add();
			  }
			  $goods = M('Goods')->find();
			  $Buy = M("Buy"); // 实例化User对象			
			  $Buy->create();
			  $Buy->buy_mode = 1;
			  $Buy->goods_id = $goods['goods_id'];
			  $Buy->goods_number = $_SESSION['goods_number'];
			  $Buy->goods_price = $goods['goods_price'];
			  $Buy->total_price = $_SESSION['total_price'];
			  $Buy->out_trade_no = $_SESSION['out_trade_no'];
			  $Buy->member_id = $id;
			  $Buy->member_name = $_SESSION['member_name'];
			  if(!empty($_SESSION['parent_id'])){
				$back_money = $_SESSION['total_price']*50/100;
				$Buy->back_money = $back_money;
				$Buy->parent_id = $_SESSION['parent_id'];		
			  }
			  $Buy->add_time = time();
			  $Buy->add();
			  
			  if(!empty($_SESSION['parent_id'])){
				  $parent = M('Member')->where('member_id='.$_SESSION['parent_id'])->find();
				  $Member = M("Member"); // 实例化User对象			
				  $Member->create();
				  $Member->member_money = $back_money+$parent['member_money'];
				  $Member->where('member_id='.$_SESSION['parent_id'])->save();  
			  }
			  // $this->redirect('Member/index/id/'.$id);
			  $results['message'] = "支付成功！";
			  $results['id'] = $id;
		  }					
		}else{
			// print_r('123');
			$member = M('Member')->where("login_id = '".$_SESSION['login_id']."'"." and login_mode = 1")->find();
			$id = $member['member_id'];
			$results['id'] = $id;
			// $this->redirect('Member/index/id/'.$id);			
		}
		$this->ajaxReturn($results);
	}
	
	//查询订单
    public function orderQuery()
    {  
		//out_trade_no='+$('out_trade_no').value,
        //退款的订单号
    	if (!isset($_POST["out_trade_no"]))
    	{
    		$out_trade_no = " ";
    	}else{
    	    $out_trade_no = $_POST["out_trade_no"];
			// print_r($out_trade_no);exit;
			session('out_trade_no', $out_trade_no);
    		//使用订单查询接口
    		$orderQuery = new \OrderQuery_pub();
    		//设置必填参数
    		//appid已填,商户无需重复填写
    		//mch_id已填,商户无需重复填写
    		//noncestr已填,商户无需重复填写
    		//sign已填,商户无需重复填写
    		$orderQuery->setParameter("out_trade_no","$out_trade_no");//商户订单号 
    		//非必填参数，商户可根据实际情况选填
    		//$orderQuery->setParameter("sub_mch_id","XXXX");//子商户号  
    		//$orderQuery->setParameter("transaction_id","XXXX");//微信订单号
    		
    		//获取订单查询结果
    		$orderQueryResult = $orderQuery->getResult();
    		
    		//商户根据实际情况设置相应的处理流程,此处仅作举例
    		if ($orderQueryResult["return_code"] == "FAIL") {
    			$this->error($out_trade_no);
    		}
    		elseif($orderQueryResult["result_code"] == "FAIL"){
//     			$this->ajaxReturn('','支付失败！',0);
    			$this->error($out_trade_no);
    		}
    		else{
    		     $i=$_SESSION['i'];
    		     $i--;
    		     $_SESSION['i'] = $i;
    		      //判断交易状态
    		      switch ($orderQueryResult["trade_state"])
    		      {
    		          case SUCCESS: 						  
						  $res['message'] = 0;	
						  $res['content'] = '支付成功！！';
						  $res['url'] = __APP__.'/Goods/weixin_login';						  
						  $this->ajaxReturn($res);
    		              break;
    		          case REFUND:
						  $res['message'] = 1;						
						  $res['content'] = '超时关闭订单';
						  $this->ajaxReturn($res);
    		              // $this->error("超时关闭订单：".$i);
    		              break;
    		          case NOTPAY:
					      $res['message'] = 2;						
						  $res['content'] = '超时关闭订单';
						  $this->ajaxReturn($res);
    		              // $this->error("超时关闭订单：".$i);
						  // $this->ajaxReturn($orderQueryResult["trade_state"], "支付成功", 1);
    		              break;
    		          case CLOSED:
						  $res['message'] = 3;						
						  $res['content'] = '超时关闭订单';
						  $this->ajaxReturn($res);
    		              // $this->error("超时关闭订单：".$i);
    		              break;
    		          case PAYERROR:
						  $res['message'] = 4;						
						  $res['content'] = '支付失败';
						  $this->ajaxReturn($res);
    		              // $this->error("支付失败".$orderQueryResult["trade_state"]);
    		              break;
    		          default:
						  $res['message'] = 5;						
						  $res['content'] = '未知失败';
						  $this->ajaxReturn($res);
    		              // $this->error("未知失败".$orderQueryResult["trade_state"]);
    		              break;
    		      }
    		     }	
    	}
    }
	
	// 支付宝支付及回调
	public function return_url(){
		/* 获取配置文件的ali参数 */
        $ali_config = C("ALI_CONFIG");

        /* 应用的APPID */
        $app_id = "2018080160797874";
        /* 【成功授权】后的回调地址 */
        $my_url = "http://".$_SERVER['HTTP_HOST']."/Goods/return_url";

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
			$aop->alipayrsaPublicKey = "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsQfgYI3CgOGiZqnsDQw1XLAIgL6dGy59/8slcsDQBbcQGQ9mK02yXfuI9bonqk3ORbSVTq/8D8A9G3e0cqza9YZXZtN7alq9tlXtlWMbyS4oDJYaP1glz20RlSylvy1dtHM44F2r5ZDj03wXNllsVoO88KFpxAz2QbELrVivXh/VwyefUPaYHbKiqXpO6huybJbXVzDSeIUnuGbeVGx9D/9+7r4etqdkm0fn2wzf4tNMlVFISmL/CAmTPTYVgy7oKVggX1H3x9ATACaCNAfx2vnC21zW065BNaJBm48i1Cmo+XPmY/80j50OHbbjK+WxkxGYrSzxucoNwVCTsMPkKQIDAQAB";
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
				session('login_id', $user_data->user_id);
				// session('member_name', $user_data->nick_name);
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
				if(!empty($_SESSION['out_trade_no'])){
				  $buy = M('Buy')->where("out_trade_no = ".$_SESSION['out_trade_no'])->find();
				  // print_r($buy);exit;
				  if(!empty($buy)){
					  $id = $buy['member_id'];
					  $this->redirect('Member/index/id/'.$id);
				  }else{
					  $member = M('Member')->where("login_id = ".$_SESSION['login_id']." and login_mode = 2")->find();
					  // print_r($member);exit;
					  if(!empty($member)){
						  $id = $member['member_id'];
						  $Member = M("Member"); // 实例化User对象			
						  $Member->create();
						  $Member->member_phone = $_SESSION['member_phone'];
						  $Member->member_name = $_SESSION['member_name'];
						  $Member->member_address = $_SESSION['member_address'];
						  $Member->where('member_id='.$id)->save();
					  }else{
						  $Member = M("Member"); // 实例化User对象			
						  $Member->create();
						  $Member->login_mode = 2;
						  $Member->member_phone = $_SESSION['member_phone'];
						  $Member->is_open = 0;
						  $Member->member_name = $_SESSION['member_name'];
						  $Member->member_address = $_SESSION['member_address'];
						  if(!empty($_SESSION['parent_id'])){
						  $Member->parent_id = $_SESSION['parent_id'];
						  }					  	  
						  $Member->login_mode = 2;
						  $Member->login_id = $_SESSION['login_id'];
						  $Member->add_time = time();
						  $id = $Member->add();
					  }
					  $goods = M('Goods')->find();
					  $Buy = M("Buy"); // 实例化User对象			
					  $Buy->create();
					  $Buy->buy_mode = 2;
					  $Buy->goods_id = $goods['goods_id'];
					  $Buy->goods_number = $_SESSION['goods_number'];
					  $Buy->goods_price = $goods['goods_price'];
					  $Buy->total_price = $_SESSION['total_price'];
					  $Buy->out_trade_no = $_SESSION['out_trade_no'];
					  $Buy->member_id = $id;
					  $Buy->member_name = $_SESSION['member_name'];
					  if(!empty($_SESSION['parent_id'])){
						$back_money = $_SESSION['total_price']*50/100;
						$Buy->back_money = $back_money;
						$Buy->parent_id = $_SESSION['parent_id'];		
					  }
					  $Buy->add_time = time();
					  $Buy->add();
					  
					  if(!empty($_SESSION['parent_id'])){
						  $parent = M('Member')->where('member_id='.$_SESSION['parent_id'])->find();
						  $Member = M("Member"); // 实例化User对象			
						  $Member->create();
						  $Member->member_money = $back_money+$parent['member_money'];
						  $Member->where('member_id='.$_SESSION['parent_id'])->save();  
					  }
					  $this->redirect('Member/index/id/'.$id);
				  }					
				}else{
					$member = M('Member')->where("login_id = ".$_SESSION['login_id']." and login_mode = 2")->find();
					$id = $member['member_id'];
					if(!empty($id)){
						$this->redirect('Member/index/id/'.$id);
					}else{
						$this->error("请购买商品后完成登录！", U('Goods/index'));
					}							
				}

            } else {
                $this->error("操作异常，拒绝访问！", U('Goods/index'));
            }

        }
	}
	
	public function code(){
		if(!empty($_GET['id'])){
			$company = D("Company")->find();
			// print_r($company);exit;
			$url = 'http://'.$company['link'].__ROOT__.'/Goods/index/code/'.$_GET['id'];
			// print_r($url);exit;
			
			$this->assign('company',$company);
			$this->assign('url',$url);
			
		}
		$this->display();
	}
		
	public function weixin_login(){
		header("Content-type: text/html; charset=utf-8");
		import('Org.Util.WeChatAuth');
		$Wechat = new \WeChatAuth();
		$token = session('token'); //查看是否已经授权
		// print_r($_SESSION);exit;
		if (!empty($token)) {
			$state = $Wechat->check_access_token($token['access_token'],$token['openid']); //检验token是否可用(成功的信息："errcode":0,"errmsg":"ok")
		}
		$company = M('Company')->find();
		$url = $Wechat->get_authorize_url("http://{$company['link']}/Goods/test2",'1'); //此处链接授权后，会跳转到下方处理
		// echo '<a href='.$url.'>点击授权登陆</a></pre>';
		/* print_r($url);exit; */
		$this->assign('url',$url);
		$this->display();
	}

	public function test2(){
		// print_r($_SESSION);exit;
		import('Org.Util.WeChatAuth');
		$Wechat = new \WeChatAuth();
		// print_r($_GET['code']);exit;
		$token = $Wechat->get_access_token('','',$_GET['code']); //确认授权后会，根据返回的code获取token
		// print_r($token);exit;
		session('token',$token); //保存授权信息
		import('Org.Util.WeChatAuth');
		$Wechat = new \WeChatAuth();
		$user_info = $Wechat->get_user_info($token['access_token'],$token['openid']); //获取用户信息
		session('login_id', $user_info['openid']);
		
		if(!empty($_SESSION['out_trade_no'])){
		  // print_r('456');exit;
		  $buy = M('Buy')->where("out_trade_no = '".$_SESSION['out_trade_no']."'")->find();
		  // print_r($buy);exit;
		  if(!empty($buy)){
			  $id = $buy['member_id'];
			  $this->redirect('Member/index/id/'.$id);
		  }else{
			  $member = M('Member')->where("login_id = '".$_SESSION['login_id']."' and login_mode = 1")->find();
			  // print_r($member);exit;
			  if(!empty($member)){
				  $id = $member['member_id'];
				  $Member = M("Member"); // 实例化User对象			
				  $Member->create();
				  $Member->member_phone = $_SESSION['member_phone'];
				  $Member->member_name = $_SESSION['member_name'];
				  $Member->member_address = $_SESSION['member_address'];
				  $Member->where('member_id='.$id)->save();
			  }else{
				  $Member = M("Member"); // 实例化User对象			
				  $Member->create();
				  $Member->login_mode = 1;
				  $Member->member_phone = $_SESSION['member_phone'];
				  $Member->is_open = 0;
				  $Member->member_name = $_SESSION['member_name'];
				  $Member->member_address = $_SESSION['member_address'];
				  if(!empty($_SESSION['parent_id'])){
				  $Member->parent_id = $_SESSION['parent_id'];
				  }					  	  
				  $Member->login_mode = 1;
				  $Member->login_id = $_SESSION['login_id'];
				  $Member->add_time = time();
				  $id = $Member->add();
			  }
			  $goods = M('Goods')->find();
			  $Buy = M("Buy"); // 实例化User对象			
			  $Buy->create();
			  $Buy->buy_mode = 1;
			  $Buy->goods_id = $goods['goods_id'];
			  $Buy->goods_number = $_SESSION['goods_number'];
			  $Buy->goods_price = $goods['goods_price'];
			  $Buy->total_price = $_SESSION['total_price'];
			  $Buy->out_trade_no = $_SESSION['out_trade_no'];
			  $Buy->member_id = $id;
			  $Buy->member_name = $_SESSION['member_name'];
			  if(!empty($_SESSION['parent_id'])){
				$back_money = $_SESSION['total_price']*50/100;
				$Buy->back_money = $back_money;
				$Buy->parent_id = $_SESSION['parent_id'];		
			  }
			  $Buy->add_time = time();
			  $Buy->add();
			  
			  if(!empty($_SESSION['parent_id'])){
				  $parent = M('Member')->where('member_id='.$_SESSION['parent_id'])->find();
				  $Member = M("Member"); // 实例化User对象			
				  $Member->create();
				  $Member->member_money = $back_money+$parent['member_money'];
				  $Member->where('member_id='.$_SESSION['parent_id'])->save();  
			  }
			  $this->redirect('Member/index/id/'.$id);
		  }					
		}else{
			// print_r('123');exit;
			$member = M('Member')->where("login_id = '".$_SESSION['login_id']."'"." and login_mode = 1")->find();
			$id = $member['member_id'];
			if(!empty($id)){
				$this->redirect('Member/index/id/'.$id);
			}else{
				$this->error("请购买商品后完成登录！", U('Goods/index'));
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