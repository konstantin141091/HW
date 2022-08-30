<?php

namespace App\Repositories;

use App\Http\Requests\FightRequest;
use App\Models\Fight;
use App\Models\FightHero;

class FightRepository
{
    private $fight_type;
    private $attack_power;
    private $protected_power;
    private $comment;
    private $user_id;
    private $attack_1;
    private $attack_2;
    private $attack_3;
    private $attack_4;
    private $attack_5;
    private $protected_1;
    private $protected_2;
    private $protected_3;
    private $protected_4;
    private $protected_5;
    private $attack_power_1;
    private $attack_power_2;
    private $attack_power_3;
    private $attack_power_4;
    private $attack_power_5;
    private $protected_power_1;
    private $protected_power_2;
    private $protected_power_3;
    private $protected_power_4;
    private $protected_power_5;
    public function __construct(FightRequest $request)
    {
        $this->fight_type = (int) $request->input('fight_type');
        $this->attack_power = $request->input('attack_power');
        $this->protected_power = $request->input('protected_power');
        $this->comment = $request->input('comment');
        $this->user_id = $request->user()->id;
        $this->attack_1 = (int) $request->input('attack-1');
        $this->attack_2 = (int) $request->input('attack-2');
        $this->attack_3 = (int) $request->input('attack-3');
        $this->attack_4 = (int) $request->input('attack-4');
        $this->attack_5 = (int) $request->input('attack-5');
        $this->protected_1 = (int) $request->input('protected-1');
        $this->protected_2 = (int) $request->input('protected-2');
        $this->protected_3 = (int) $request->input('protected-3');
        $this->protected_4 = (int) $request->input('protected-4');
        $this->protected_5 = (int) $request->input('protected-5');
        $this->attack_power_1 = $request->input('attack-power-1');
        $this->attack_power_2 = $request->input('attack-power-2');
        $this->attack_power_3 = $request->input('attack-power-3');
        $this->attack_power_4 = $request->input('attack-power-4');
        $this->attack_power_5 = $request->input('attack-power-5');
        $this->protected_power_1 = $request->input('protected-power-1');
        $this->protected_power_2 = $request->input('protected-power-2');
        $this->protected_power_3 = $request->input('protected-power-3');
        $this->protected_power_4 = $request->input('protected-power-4');
        $this->protected_power_5 = $request->input('protected-power-5');
    }

    public function checkProtectedHeros() :bool
    {
        $heros = [];
        for ($i = 1; $i <= 5; $i++) {
            $val = 'protected_' . $i;
            $heros[$this->$val] = $this->$val;
        }
        if (count($heros) < 5) {
            return false;
        }
        return true;
    }

    public function checkAttackHeros() :bool
    {
        $heros = [];
        for ($i = 1; $i <= 5; $i++) {
            $val = 'attack_' . $i;
            $heros[$this->$val] = $this->$val;
        }
        if (count($heros) < 5) {
            return false;
        }
        return true;
    }

    public function save() :void
    {
        $fight = new Fight();
        $fight->attack_power = $this->attack_power;
        $fight->protected_power = $this->protected_power;
        $fight->fight_type = $this->fight_type;
        $fight->comment = $this->comment;
        $fight->user_id = $this->user_id;
        $fight->attack_code = $this->getHeroCode('attack_');
        $fight->protected_code = $this->getHeroCode('protected_');
        $fight->save();
        $this->saveFightHero($fight->id);
    }

    /**
     * @param string $type \\ 'attack_' or 'protected_'
     * @return string
     */
    private function getHeroCode(string $type) :string
    {
        $code = '';
        $heros = [];
        for ($i = 1; $i <= 5; $i++) {
            $val = $type . $i;
            $heros[$this->$val] = $this->$val;
        }
        sort($heros);
        foreach ($heros as $hero) {
            $code = $code . $hero . '-';
        }
        $code = substr($code,0,-1);
        return $code;
    }

    private function saveFightHero(int $fight_id) :void
    {
        for ($i = 1; $i <= 5; $i++) {
            $hero_id = 'attack_' . $i;
            $hero_power = 'attack_power_' . $i;
            $hero_model = new FightHero();
            $hero_model->fight_id = $fight_id;
            $hero_model->hero_id = $this->$hero_id;
            $hero_model->power = $this->$hero_power;
            $hero_model->type = 'attack';
            $hero_model->save();
        }
        for ($i = 1; $i <= 5; $i++) {
            $hero_id = 'protected_' . $i;
            $hero_power = 'protected_power_' . $i;
            $hero_model = new FightHero();
            $hero_model->fight_id = $fight_id;
            $hero_model->hero_id = $this->$hero_id;
            $hero_model->power = $this->$hero_power;
            $hero_model->type = 'protected';
            $hero_model->save();
        }
    }

}
