<x-layout title="Editar Usuário '{{ $user->name }}'">
    <x-users.form :action="route('users.update', $user->id)" :name="$user->name" :email="$user->email" :update="true" />
</x-layout>