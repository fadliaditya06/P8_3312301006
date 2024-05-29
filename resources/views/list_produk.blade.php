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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item)
                    <tr class="bg-base-200">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item }}</td>
                        <td>{{ $desc[$index] }}</td>
                        <td>{{ $harga[$index] }}</td>
                        <td>
                            <form action="{{ route('produk.delete', $id[$index]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-red-600 hover:bg-red-600" onclick="return confirm('Are you sure you want to delete {{ $item }}?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="ml-10 mt-10">
            <p class="text-2xl">Input Produk</p>
            <form method="POST" action="{{ route('produk.simpan') }}">
                <div class="space-y-6">
                    @csrf
                    <div class="sm:col-span-3">
                        <label for="nama" class="block text-base font-medium leading-6 text-gray-900">Nama</label>
                        <div class="mt-2">
                            <input type="text" id="nama" name="nama"
                                class="block w-full max-w-lg rounded-md border border-lime-700 py-2 px-3 text-gray-900 shadow-sm focus:border-lime-700 focus:ring-lime-700 hover:border-lime-700 sm:text-sm">
                        </div>
                    </div>
                    <div class="col-span-full">
                        <label for="deskripsi"
                            class="block text-base font-medium leading-6 text-gray-900">Deskripsi</label>
                        <div class="mt-2">
                            <textarea id="deskripsi" name="deskripsi" rows="3"
                                class="block w-full max-w-lg rounded-md border border-lime-700 py-2 px-3 text-gray-900 shadow-sm focus:border-lime-700 focus:ring-lime-700 hover:border-lime-700 sm:text-sm"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="harga" class="block text-base font-medium leading-6 text-gray-900">Harga</label>
                        <div class="mt-2">
                            <input id="harga" name="harga" type="number"
                                class="block w-full max-w-lg rounded-md border border-lime-700 py-2 px-3 text-gray-900 shadow-sm focus:border-lime-700 focus:ring-lime-700 hover:border-lime-700 sm:text-sm">
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="submit" class="btn bg-sky-500 hover:bg-sky-500">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>