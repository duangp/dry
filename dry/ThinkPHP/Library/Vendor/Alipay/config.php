<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2018080160797874",

		//商户私钥
		'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCCaQP8Lxv1VsOO837BepnxaLFHb1HEETEpCCEqGF+J2eGbpLb6kIomFtn12MI7ZN9testuQ7xZ8A3Hy48CNfHVPDFSx0QMscb2jFvMemPUCEQ0dY9+5d2OjqG+3ijwZalcbEPlJnGdWnoKeid1ZkyYiXiAR3lROn6YpkgTBoIgGdFGTHfMxYxbDo+hLP2nr/qRoI480OAdGvMj98ufOR1rew/iuPl7IE7M4yNW7g3hFPir/hDbW4ywUDWs0fLiKnjzLTsUeL7UWFFay4wd5QnHhfKtId+pe4uxs36MtpDKFNHSy8Xr8EUWyYg1cKf8LxMHBIgldVkJXdcuFxMNoJ4pAgMBAAECggEANCDwU90s6twc3cadk4+De8lim/B2mc5ZfVJfl2kYv4zVrxafgfdHEcSuqaRUt9MxsJyWNuRipPzdNVE8QCD6I0elW7aFkCF8K8+dXlZKE1aelO2tR4dxEewX4akCal3o3iX02eONJN4mzItZvIcA9TR2c6ieaQbd1f0Z8Gj4mQXGoz7VCz/XZ22AdD+WdUZ8zuhFYn0YGRn+f7ufiBDUQ3wBJ+Oa1VFgrIfEiGUJR9vRmPHqAyiXSqT937tNyDg7YGu2ZtsU/FxJjsKoBLr7h7wjUVY3TGvItTIinSQC/RkbwQ1BJsMgLNSVuLP6RPkktm9FRQkHdoVd3UnYDw4m5QKBgQDBAYXV30TkVWFw3y73DAcXGKJqEgSI9jIgnDtv2Izz1gS9WQu3gG1eL2P/Iq8uim6iFXHD6fqiQbZD8pFg//Ub+GDAbDzwRE/yAIoB1ROcXxh4XVgeWVWof2IHHGkbk4I8a4QKjsrJmth2b5uPjxGL3Jo2oaLQnyfhvv1D70z7XwKBgQCs+VmkLy6acjJLrsAm0/oYD/EXuEivUGakaJTCYuLOC5+6+TBN8OzAdYs/mn7TBFGZjIRRMWtKEcN1/GreSWHcDMJO3193hKLAyjGGnbpaVeSobnAg/tBcV3QrT61Zrx7TGl0j/mIv9LexJLF3cOIi2+0F9rhPNp2eFZ7VWqNbdwKBgEwN7pA9n+ceIfyZZedh7PVT9sQ3f2P9J/mjtuQ3ACwhvNJkYXKY///qSsxB/agoUro6Gw9phyMjI9CYqGMB2bOA55dLz6OaN6qUPc3FCipHatwbZFrpNxDjyVwl/OEp+lsWvvxuEkjpZL0e87zZUr+7WWWHwiHVZaDWYvS/OqWfAoGAVO8LKSdRxtyT/b2M9IPZpb8OLwt6BTuBavE/OkO8AliK0hBRu7O1TLtq6IxAAfV46+CniAawG+qlA2YyQ3vc5WQOdRQRmGo0UF33+5WvT3Qllt7DiDAWt4DpteqlwAfRJu8nFOlv5QRQvla6HV/8agl7VRZUYfD7bAhJuZGL7PkCgYEArkCczFcFaH+qgzuMdanNVb0zztKE9yc+zieA5Cqf/WwfLEsOkrh2mY1nLsuu8mjDRsTPfm7banIXBN+01X8YOykKCxkrCwTNTGP6kbpP+T1WE3Qe7Iad1+FeKVcf4UjJF+UmhZ1TMlQRBscJIuYKgajP5zSp7XYbCNGp8duSy60=",
		
		//异步通知地址
		'notify_url' => "http://cs.tamenn.com/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://cs.tamenn.com/alipay.trade.page.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgmkD/C8b9VbDjvN+wXqZ8WixR29RxBExKQghKhhfidnhm6S2+pCKJhbZ9djCO2TfbXrLbkO8WfANx8uPAjXx1TwxUsdEDLHG9oxbzHpj1AhENHWPfuXdjo6hvt4o8GWpXGxD5SZxnVp6CnondWZMmIl4gEd5UTp+mKZIEwaCIBnRRkx3zMWMWw6PoSz9p6/6kaCOPNDgHRrzI/fLnzkda3sP4rj5eyBOzOMjVu4N4RT4q/4Q21uMsFA1rNHy4ip48y07FHi+1FhRWsuMHeUJx4XyrSHfqXuLsbN+jLaQyhTR0svF6/BFFsmINXCn/C8TBwSIJXVZCV3XLhcTDaCeKQIDAQAB",
);