@extends('layouts.app-admin')

@section('content')

    <div class="card w-25 m-auto center-div">
        <div class="card-body">
            <div class="card-header font-weight-normal text-center text-dark">
                <span class="form-label">Užduoties Kūrimas</span>
            </div>
            <form method="post" id="new-device" action="{{url ('/add-device')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select type="text" class="form-control shadow" name="task" required>
                        <option selected disabled>Bėda</option>
                        <option @if(old('task') == 'chassis') selected @endif name="chassis">Važiuoklė</option>
                        <option @if(old('task') == 'engine') selected @endif name="engine">Variklio Skyrius</option>
                        <option @if(old('task') == 'body') selected @endif name="body">Kėbulas</option>
                        <option @if(old('task') == 'salon') selected @endif name="salon">Salonas</option>
                        <option @if(old('task') == 'outside') selected @endif name="outside">Išorė</option>
                        <option @if(old('task') == 'filter') selected @endif name="filter">Filtrų Keitimas</option>
                        <option @if(old('task') == 'diagnostics') selected @endif name="diagnostics">Kompiuterinė Diagnostika</option>
                        <option @if(old('task') == 'liquids') selected @endif name="liquids">Skysčių Keitimas</option>
                    </select>
                    @error('task')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <select type="text" class="form-control shadow" name="assigned_to" required>
                        <option selected disabled>Darbuotojas</option>
                        @foreach($users as $user)
                            <option @if(old('assigned_to') == $user->name) selected @endif>{{$user->name}}</option>
                        @endforeach
                    </select>
                    @error('assigned_to')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow" placeholder="Markė" name="brand" required>
                    @error('brand')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow" placeholder="Modelis" name="model" required>
                    @error('model')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow" placeholder="Pagaminimo Metai" name="year" required>
                    @error('year')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow" placeholder="Savininko V_P" name="owner" required>
                    @error('owner')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow" placeholder="Savininko Telefonas" name="phone" required>
                    @error('phone')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="date" class="form-control shadow" placeholder="Atlikti Iki" name="due_to" required>
                    @error('due_to')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control shadow" rows="3" placeholder="Aprašymas"
                              name="description" required></textarea>
                    @error('description')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <button name="submit" type="submit" class="btn btn-primary btn-dark shadow-sm">Sukurti</button>
            </form>
        </div>
    </div>
@endsection
