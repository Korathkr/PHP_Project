function check_input()
{
    if (!document.login.login_id.value)
    {
        alert("아이디를 입력하세요!");    
        document.login.login_id.focus();
        return;
    }

    if (!document.login.login_pass.value)
    {
        alert("비밀번호를 입력하세요!");    
        document.login.login_pass.focus();
        return;
    }
    document.login.submit();
}