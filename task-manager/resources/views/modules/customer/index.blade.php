<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

  <h1>Danh sách khách hàng</h1>
  
  <table border="1">
    <thead>
      <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      @foreach($customers as $customer) 
      <tr>
        <td>{{$customer['STT']}}</td>
        <td>{{$customer['name']}}</td>   
        <td>{{$customer['phone']}}</td>
        <td>
          <a href="{{Route('them')}}">Thêm</a> | 
          <a href="{{ Route('edit', ['id' => array_search($customer, $customers)] )}}">Sửa</a> | 
          <a href="{{ Route('delete', ['id' => array_search($customer, $customers)] )}}">Xóa</a>
        </td>
        </tr>
       @endforeach
      </tbody>
    </table>
  </body>
  </html>