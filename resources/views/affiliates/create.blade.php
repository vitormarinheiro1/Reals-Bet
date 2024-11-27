<x-layout title="Novo Afiliado">
    <x-affiliates.form :action="route('affiliates.store')" :name="old('name')" :cpf="old('cpf')" :birth_date="old('birth_date')" :email="old('email')" :phone="old('phone')" :address="old('address')" :city="old('city')" :state="old('state')" :update="false" />
</x-layout>