<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/29 0029
 * Time: 14:10
 */

namespace Admin\Controller;

use think\Controller;

class DiscardedppmController extends Controller
{
    public function index()
    {
        $py = M('discarded_ppm');
        $info = $py->select();
        $this->assign("info",$info);
        $this->display();
    }

    public function add()
    {
        if ($_POST)
        {

            $py = D('discarded_ppm');
            if ($py->create($_POST))
            {
                $_POST['add_time'] = time();
                $add = $py->add($_POST);
                if ($add)
                {
                    $this->success('添加成功，返回上一页','index',2);
                }
                else
                {
                    $this->error('添加失败，返回上一页','index',2);
                }

            }
            else
            {
                $this->error($py->getError(),'index',2);
            }
        }
        else
        {
            $this->display();
        }
    }

    public function del($id = '')
    {
        if ($id != '')
        {
            $find_id = M('discarded_ppm')->where('dp_id = '.$id)->find();
            if ($find_id)
            {
                $del = M('discarded_ppm')->where('dp_id = '.$id)->delete();
                if ($del)
                {
                    $this->error('删除成功','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
                }
                else
                {
                    $this->error('删除失败','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
                }
            }
            else
            {
                $this->error('记录不存在','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
            }
        }
        else
        {
            $this->error('参数错误','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
        }
    }

    public function update($id = '')
    {
        if ($id != '')
        {
            if ($_POST)
            {
                $py = D('discarded_ppm');
                if ($py->create($_POST))
                {
                    $_POST['edit_time'] = time();
                    $add = $py->where('dp_id = '.$id)->save($_POST);
                    if ($add)
                    {
                        $this->success('修改成功，返回上一页','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
                    }
                    else
                    {
                        $this->error('修改失败，返回上一页','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
                    }

                }
                else
                {
                    $this->error($py->getError(),'http://localhost/dry/dry/admin.php/Discardedppm/index',2);
                }
            }
            else
            {
                $py = M('discarded_ppm');
                $info = $py->where('dp_id = '.$id)->find();
                $this->assign("info",$info);
                $this->display();
            }
        }
        else
        {
            $this->error('参数错误','http://localhost/dry/dry/admin.php/Discardedppm/index',2);
        }
    }


}