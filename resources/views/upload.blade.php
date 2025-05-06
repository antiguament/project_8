<!DOCTYPE html>
<html>
<head>
    <title>Subir imagen</title>
</head>
<body>
    @if ($message = Session::get('success'))
        <div style="color: green;">
            {{ $message }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Subir imagen</button>
    </form>

    @if ($image = Session::get('image'))
        <img src="{{ asset('storage/'.$image) }}" style="max-width: 300px;">
    @endif
</body>
</html>