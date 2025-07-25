@extends('app')

@section('contents')
  <section>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert mt-2 alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <div class="card my-5">
                <div class="card-body">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Subject</label>
                            <input name="subject" type="text" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

