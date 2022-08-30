@extends('layouts.app')

@section('content')

    <div>
        <form method="POST" action="{{ route('fight.store') }}">
            @csrf
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <div class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Общая информация
                            </div>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="form-group">
                            <label for="fight_type">Тип боя</label>
                            <select class="form-control" id="fight_type" name="fight_type">
                                <option disabled>Выберите тип</option>
                                @foreach($fight_types as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('fight_type')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('fight_type'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('fight_type') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'attack_power',
                            'input_title' => 'Мощь команды атаки',
                        ])
                        @include('_templates._input_number_create', [
                            'input_name' => 'protected_power',
                            'input_title' => 'Мощь команды защиты',
                        ])
                        @include('_templates._textarea_create', [
                            'input_name' => 'comment',
                            'input_title' => 'Комментарий',
                        ])
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <div class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Команда атаки
                            </div>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <!-- 1 -->
                        <div class="form-group">
                            <label for="attack-1">Герой - 1 (атака)</label>
                            <select class="form-control" id="attack-1" name="attack-1">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('attack-1')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('attack-1'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('attack-1') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'attack-power-1',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 2 -->
                        <div class="form-group">
                            <label for="attack-2">Герой - 2 (атака)</label>
                            <select class="form-control" id="attack-2" name="attack-2">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('attack-2')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('attack-2'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('attack-2') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'attack-power-2',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 3 -->
                        <div class="form-group">
                            <label for="attack-3">Герой - 3 (атака)</label>
                            <select class="form-control" id="attack-3" name="attack-3">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('attack-3')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('attack-3'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('attack-3') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'attack-power-3',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 4 -->
                        <div class="form-group">
                            <label for="attack-2">Герой - 4 (атака)</label>
                            <select class="form-control" id="attack-4" name="attack-4">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('attack-4')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('attack-4'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('attack-4') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'attack-power-4',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 5 -->
                        <div class="form-group">
                            <label for="attack-2">Герой - 5 (атака)</label>
                            <select class="form-control" id="attack-5" name="attack-5">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('attack-5')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('attack-5'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('attack-5') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'attack-power-5',
                            'input_title' => 'Мощь',
                        ])
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <div class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Команда защиты
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <!-- 1 -->
                        <div class="form-group">
                            <label for="protected-1">Герой - 1 (защита)</label>
                            <select class="form-control" id="protected-1" name="protected-1">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('protected-1')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('protected-1'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('protected-1') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'protected-power-1',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 2 -->
                        <div class="form-group">
                            <label for="protected-2">Герой - 2 (защита)</label>
                            <select class="form-control" id="protected-2" name="protected-2">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('protected-2')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('protected-2'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('protected-2') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'protected-power-2',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 3 -->
                        <div class="form-group">
                            <label for="protected-3">Герой - 3 (защита)</label>
                            <select class="form-control" id="protected-3" name="protected-3">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('protected-3')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('protected-3'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('protected-3') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'protected-power-3',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 4 -->
                        <div class="form-group">
                            <label for="protected-2">Герой - 4 (защита)</label>
                            <select class="form-control" id="protected-4" name="protected-4">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('protected-4')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('protected-4'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('protected-4') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'protected-power-4',
                            'input_title' => 'Мощь',
                        ])
                        <!-- 5 -->
                        <div class="form-group">
                            <label for="protected-2">Герой - 5 (защита)</label>
                            <select class="form-control" id="protected-5" name="protected-5">
                                <option disabled>Выберите героя</option>
                                @foreach($heros as $item)
                                    <option value="{{ $item->id }}" @if($item->id == old('protected-5')) selected @endif>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('protected-5'))
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->get('protected-5') as $err)
                                        {{ $err }}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        @include('_templates._input_number_create', [
                            'input_name' => 'protected-power-5',
                            'input_title' => 'Мощь',
                        ])
                    </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-success">Создать</button>
            </div>
        </form>
    </div>

@endsection
