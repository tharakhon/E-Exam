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
        <h2 class="text text-center py-2">บันทึกรายการขอลาหยุด</h2>
        <form method="POST" action="/insert">
            @csrf
            <div class="form-group">
                <label for="title">ชื่อ - นามสกุล</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            @error('fullname')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            <div class="form-group">
                <label for="title">สังกัด/ตำแหน่ง</label>
                <input type="text" name="position" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">อีเมล์</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">เบอร์โทรศัพท์</label>
                <input type="tel" name="phone" class="form-control">
            </div>
            @error('phone')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            <div class="form-group">
                <label for="title">ประเภทการลา</label>
                <input type="text" name="Leavetype" class="form-control">
            </div>
            @error('Leavetype')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            <div class="form-group">
                <label for="title">สาเหตุการลา</label>
                <textarea name="vacation" cols="30" rows="5" class="form-control"></textarea>
            </div>
            @error('vacation')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            <div class="form-group">
                <label for="title">วันที่ขอลา - ถึงวันที่</label>
                <input type="datetime" name="DateTo" class="form-control">
            </div>
            @error('DateTo')
                <div class="my-2">
                    <span class="text text-danger">{{ $message }}</span>
                </div>
            @enderror
            <input type="submit" value="บันทึก" class="btn btn-primary my-3">
            <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
        </form>
    </div>
</body>

</html>
