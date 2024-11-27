<x-layout title="Adicionar Comissão">
    <x-commissions.form :action="route('commissions.store')" :name="old('name')" :cpf="old('cpf')" :birth_date="old('birth_date')" :email="old('email')" :phone="old('phone')" :address="old('address')" :city="old('city')" :state="old('state')" :update="false" />
</x-layout>