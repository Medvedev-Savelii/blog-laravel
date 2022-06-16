@extends('admin.layouts.main')
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route("admin.post.store")}}" class="btn btn-block btn-primary btn-lg">Назад</a>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{route("admin.post.store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25" >
                                <input type="text" class="form-control" name="title" placeholder="Введите название категории" value="{{old('title')}}">
                                @error('title')
                                        <div class="text-danger">Заполни поле </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="content" id="summernote" value="{{old('content')}}"></textarea>
                                @error('content')
                                <div class="text-danger">Заполни поле </div>
                                @enderror
                            </div>
                     {{-------------------------Preview----------------------------}}
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                    @error('preview_image')
                                    <div class="text-danger">Выберите изображение </div>
                                    @enderror
                                </div>
                            </div>
                     {{-------------------------Preview----------------------------}}
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                    @error('main_image')
                                    <div class="text-danger">Выберите изображение </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group w-50">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == old('category_id') ? "selected" : ""}}
                                    >{{$category->title}}</option>
                                    @endforeach()
                                        @error('category_id')
                                        <div class="text-danger">Выберите категорию </div>
                                        @enderror
                                </select>
                            </div>
                            <div class="form-group w-50">
                                <label>Теги</label>
                                <select class="select2" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                    @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary col-4" value="Добавить">
                            </div>
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
