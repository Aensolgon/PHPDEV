@extends('template')
@section('content')
<div class="my-5 ml-5">
<a href="{{route('authors')}}">На главную</a> 
</div>
<div class="container my-5 d-flex flex-wrap">
  
            @foreach ($books as $item)
            <div class="card-deck col-md-4 my-3 " style="width: 350px">
                    <div class="card"> 
                        <div class="text-center my-1">
                        <img class="card-img-top" src="{{$item->book_image}}"  style="width: 255px;
                         height: auto;"  >
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">Название: {{$item->name}}</h5>
                        <p class="card-text">Автор: {{$item->name_author}}</p>
                    </div>
                        <div class="card-footer">
                        <button class="btn btn-primary request" id="name-id" name="id" value="{{$item->id}}" data-toggle="modal" data-target="#request">
                            Оформить заявку на книгу
                        </button>
                        </div>
                    </div>
        </div>
            @endforeach
</div>    
      <!-- Modal -->
      <div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Оформление заявки</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="form" method="POST">
                    {{ csrf_field() }}
                  <div class="form-group row">
                      <input type="hidden" name="name_book" id="myID" value="">
                      <label for="user-name" class="col-sm-2 col-form-label">Name:</label>
                      <div class="col-sm-10 some-form__line user-name">
                        <input type="text" value="{{$item->name_author}}" name="author" hidden id="author">
                          <input type="text" class="form-control" name="user_name" id="user-name" data-validate >
                          <span class="some-form__hint">Обязательно для заполнения</span>
                      </div>
                  </div>
                  <div class="form-group row">
                        <label for="user-email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10 some-form__line user-name">
                            <input type="email" class="form-control" name="user_email" id="user-email" data-validate>
                            <span class="some-form__hint">Обязательно для заполнения</span> 
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="modal-add-book">Push</button>
              
                          </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
@endsection