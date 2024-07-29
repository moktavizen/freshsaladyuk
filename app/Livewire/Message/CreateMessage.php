<?php

namespace App\Livewire\Message;

use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class CreateMessage extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(['sm' => 12])
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->columnSpan(['sm' => 6])
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->columnSpan(['sm' => 6])
                            ->email()
                            ->required(),
                        Forms\Components\TextInput::make('title')
                            ->columnSpanFull()
                            ->required(),
                        Forms\Components\Textarea::make('message')
                            ->rows(7)
                            ->columnSpanFull()
                            ->required(),
                    ])
                    ->statePath('data')
                    ->model(Message::class)
            ]);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Message::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.message.create-message');
    }
}
