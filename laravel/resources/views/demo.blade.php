<html>
<div>
    <form action="{{url('testvalue')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <p>用户名: <input type="text" name="name"/></p>
        <p>密码: <input type="password" name="pwd"/></p>
        <p><input type="submit" value="submit"/></p>
    </form>
</div>

</html>