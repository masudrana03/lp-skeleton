<?php

namespace LazyHub\LazyadminLaravel\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Attribute\AsCommand;
use Illuminate\Contracts\Console\PromptsForMissingInput;




#[AsCommand(name: 'lazyadmin:install')]
class InstallCommand extends Command implements PromptsForMissingInput
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lazyadmin:install {stack : The development stack that should be installed (blade,livewire,livewire-functional,react,vue,api)}
                            {--dark : Indicate that dark mode support should be installed}
                            {--pest : Indicate that Pest should be installed}
                            {--ssr : Indicates if Inertia SSR support should be installed}
                            {--typescript : Indicates if TypeScript is preferred for the Inertia stack}
                            {--composer=global : Absolute path to the Composer binary which should be used to install packages}';

    protected $description = 'Install the Lazy Admin controllers and resources';













    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        Log::info('i am running');
        // Log::info($this->argument('stack'));
        $this->info($this->argument('stack'));

        // if ($this->argument('stack') === 'vue') {
        //     return $this->installInertiaVueStack();
        // } elseif ($this->argument('stack') === 'react') {
        //     return $this->installInertiaReactStack();
        // } elseif ($this->argument('stack') === 'api') {
        //     return $this->installApiStack();
        // } elseif ($this->argument('stack') === 'blade') {
        //     return $this->installBladeStack();breeze:install
        // } elseif ($this->argument('stack') === 'livewire') {
        //     return $this->installLivewireStack();
        // } elseif ($this->argument('stack') === 'livewire-functional') {
        //     return $this->installLivewireStack(true);
        // }

        // $this->components->error('Invalid stack. Supported stacks are [blade], [livewire], [livewire-functional], [react], [vue], and [api].');

        // return 1;
    }

}
