> Да благословит тебя Господь и сохранит тебя! <br>
> Да призрит на тебя Господь светлым лицем Своим и помилует тебя! <br>
> Да обратит Господь лице Свое на тебя и даст тебе мир!
>
> — Числа, Глава 6, стихи 24-26


## Установка

    composer require klkvsk/godbless


<br>

## Обращение
Как пример:

    public function activate(Account $account)
    {
        if (Господь::getБлагоcловение() && $account->isActive()) {
            $account->setStatusId(AccountStatus::ACTIVE);
            // ...
        }
    }


