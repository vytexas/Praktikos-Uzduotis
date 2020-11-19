@extends('layouts.app-user')

@section('content')
    <div class="">
        <div class="font-weight-normal text-center text-dark py-3">
            <span class="form-label">Mano Užduotys</span>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
		        <th scope="col">Bėda</th>
                <th scope="col">Markė</th>
                <th scope="col">Modelis</th>
                <th scope="col">Pagaminimo Metai</th>
                <th scope="col">Savininko V_P</th>
                <th scope="col">Telefonas</th>
                <th scope="col">Atlikti Iki</th>
                <th scope="col">Statusas</th>
                <th scope="col">Aprašymas</th>
                <th scope="col">Veiksmai</th>
            </tr>
            </thead>
            <tbody>
            @foreach($myTask as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->task }}</td>
		            <td>{{ $task->brand }}</td>
                    <td>{{ $task->model }}</td>
                    <td>{{ $task->year }}</td>
                    <td>{{ $task->owner }}</td>
                    <td>{{ $task->phone }}</td>
                    <td>{{ $task->due_to }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ url('/uzduociu-valdymas/atlikta', $task->id) }}" class="px-2 mx-1">
                            <i class="fas fa-check-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="w-fit m-auto">
            {{ $myTask->links() }}
        </div>
    </div>

@endsection
