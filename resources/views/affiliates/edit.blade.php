<x-layout title="Editar Afiliado">
    <x-affiliates.form
    :action="route('affiliates.update',
    $affiliate->id)"
    :name="$affiliate->name"
    :cpf="$affiliate->cpf"
    :birth_date="$affiliate->birth_date"
    :email="$affiliate->email"
    :phone="$affiliate->phone"
    :address="$affiliate->address"
    :city="$affiliate->city"
    :state="$affiliate->state"
    :update="true"
    />
</x-layout>
