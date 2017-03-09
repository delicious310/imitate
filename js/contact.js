/**
 * Created by Administrator on 2017/2/28.
 */
$(function(){
    $('#submit').on('click',function(){
       var $username =  $('[name = "username"]');
        var $email =  $('[name = "email"]');
        var $content =  $('[name = "content"]');
        //if($username.val()==''){
        //    alert('请输入用户名');
        //    $username.focus();
        //}
        //$.post(url,data,callback,type)
        $.post('welcome/message',{
            username:$username.val(),
            email:$email.val(),
            content:$content.val()
            },function(res){
            if(res == 'fail'){
                $username.css({
                    border:'1px solid red'
                });
            }else if(res == 'success'){
                alert('成功');
            }
        });


    });
    $('[name = "username"]').on('blur',function(){
        $.get('welcome/check_name',
            {username:this.value},function(res){
                if(res == 'fail'){
                    alert('用户名已存在');
                }
        })
    })
});