<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aboutMe extends Model
{
    const info = [
        "Обслуживание" => '<span class="span">
            В каждом ресторане разделен на 3 зоны:<br />
            главный зал (100 человек);<br />
            банкетный (до 40 человек);<br />
            летняя веранда (24 человека).<br /><br />
            Также доступна доставка через сервис Крым.Еда:<br />
            <a href="https://xn----8sbldxm1a2g.xn--p1ai/sevastopol/restaurants/sirocco/">Перейти</a>
            <span class="text-wrapper-16">https://xn----8sbldxm1a2g.xn--p1ai/sevastopol/restaurants/sirocco/</span>
        </span>',
        "Персонал" => '<span class="span">
        Наш шеф-повар — Лука Бальестра, уроженец Неаполя,<br />
         более 15 лет создает кулинарные шедевры и разработал<br />
          меню для каждого ресторана нашей сети. Во всех<br />
           ресторанах работают его лучшие ученики.<br /><br />
           Также в команде —
        сомелье, пекари, кондитеры и<br />
         профессиональные официанты.
      </span>',
        "Награды"=> '<span class="span">
        Лучший средиземноморский ресторан" по версии<br />
         Gastronomy Awards 2023
         <br />
         <br />
         Входит в ТОП-50 ресторанов Крыма по версии Afisha
        </span>',
        "Контакты"=>'<span class="span">
         <br />Общий номер приема заказов:   +7 (978) 111 11 11<br />
         <br />ВКонтакте: @sirocco_rest<br />
         <br />Telegram: @sirocco_rest
      </span>'
    ];
}
