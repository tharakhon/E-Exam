<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บันทึกรายการขอลาหยุด</title>
</head>

<body>
    <div class="container py-2">
        @if (count($blogs) > 0)
            <h2 class="text text-center py-2">บันทึกรายการขอลาหยุดทั้งหมด</h2>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">ประเภทการลา</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">ดูบันทึกรายการขอลาหยุด</th>
                        <th scope="col">ลบบันทึกรายการขอลาหยุด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $item)
                        <tr>
                            <td>{{ $item['fullname']}}</td>
                            <td>{{ $item['Leavetype']}}</td>
                            <td>
                                @if ($item['status']==true)
                                    <a href="#" class="btn btn-success">อนุมัติ</a>
                                @else
                                <a href="#" class="btn btn-warning"
                                onclick="return confirm('คุณต้องการอนุมัติ {{ $item['fullname'] }} หรือไม่')">รอพิจารณา</a>
                                @endif
                            </td>
                            <td><a href="#" class="btn btn-success">ดูบันทึกรายการขอลาหยุด</a></td>
                            <td><a href="#" class="btn btn-danger"
                                    onclick="return confirm('คุณต้องการลบบทความ {{ $item['fullname'] }} หรือไม่')">ลบบันทึกรายการขอลาหยุด</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        @else
            <h2 class="text text-center py-2">ไม่มีบทความ</h2>
        @endif
    </div>
</body>

</html>
