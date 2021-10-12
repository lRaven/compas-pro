@extends("emails.layouts.site")

@section('content')
    <tr>
        <td class="content-block aligncenter">
            На сайте была оставлена <strong>новая</strong> заявка:
        </td>
    </tr>
    <tr>
        <td class="content-block quote">
            {{ $params->text }}
        </td>
    </tr>
    <tr>
        <td class="content-block">
            <strong>Email отправителя: </strong>{{ $params->email }}
        </td>
    </tr>
    <tr>
        <td class="content-block">
            <strong>Имя отправителя: </strong>{{ $params->name }}
        </td>
    </tr>
    <tr>
        <td class="content-block">
            <strong>Телефон отправителя: </strong>{{ $params->number }}
        </td>
    </tr>
@stop
