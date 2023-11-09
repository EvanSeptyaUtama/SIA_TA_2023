@extends('layouts.admin_layouts.app_admin')

@section('title', 'Data Admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Attendance Data</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attendances as $attendance)
                        <tr>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h1>Add Attendance Data</h1>
            <form action="{{ route('store_kehadiran') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="present">Present</option>
                        <option value="absent">Absent</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-1">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection