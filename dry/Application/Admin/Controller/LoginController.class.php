<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){		
		// 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $login = D('admin_users');
            // 自动验证 创建数据集
            if (!$data = $login->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($login->getError());
            }
            // 组合查询条件
            $where = array();
            $where['username'] = $data['username'];
            $result = $login->where($where)->field('user_id,username,password')->find();
            // 验证用户名 对比 密码
            if ($result && $result['password'] == $data['password']) {
                // 存储session
                session('uid', $result['user_id']);          // 当前用户id
                session('username', $result['username']);   // 当前用户名
                // 更新用户登录信息
                $where['userid'] = session('uid');
                $this->success('登录成功,正跳转至系统首页...', U('Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        }
        else {
			$company = "test";
			$this->assign('company',$company);
            $this->display('Login/login');
        }
  
    }
}