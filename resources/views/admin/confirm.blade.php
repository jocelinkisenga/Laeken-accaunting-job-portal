@extends("admin.admin")
@section("content")

@livewire('confirm-form', ['candidateId' => $candidateId])
@endsection