<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <input type="checkbox" value="synthwave" class="toggle theme-controller ml-10 mt-5" />
    <div class="overflow-x-auto">
        <div class="ml-10 mt-10">
            <table class="table">
                <thead>
                    <tr class="bg-base-200">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item)
                    <tr class="bg-base-200">
                        <td>{{$index + 1}}</td>
                        <td>{{ $item}}</td>
                        <td>{{ $desc[$index]}}</td>
                        <td>{{ $harga[$index]}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>