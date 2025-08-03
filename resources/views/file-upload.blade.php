@extends('app')

@section('contents')
  <section>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('success'))
                <div class="alert mt-2 alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card my-5">
                <div class="card-body">
                    <form action="{{ route('file.upload.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">File</label>
                            <input name="file" type="file" class="form-control" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>
                                <img src="{{ $file->file_path }}" alt="File" style="width: 100px; height: 100px;">
                                {{ basename($file->file_path) }}
                            </td>
                            <td class="text-start align-middle">
                                <a href="{{ $file->file_path }}" class="btn btn-info btn-sm px-4 py-2" target="_blank" style="font-weight: 500; border-radius: 5px;">
                                    View
                                </a>
                                <a href="{{ $file->file_path }}" class="btn btn-success btn-sm px-4 py-2" download style="font-weight: 500; border-radius: 5px; margin-left: 5px;">
                                    Download
                                </a>
                                <form action="{{ route('file.delete', $file->id) }}" method="POST" style="display: inline-block; margin-left: 5px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm px-4 py-2" style="font-weight: 500; border-radius: 5px;">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection

