<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aboutMe extends Model{
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
      </span>',
        "Service" => '<span class="span">
            Each restaurant is divided into 3 zones:<br />
            main hall (100 people);<br />
            banquet hall (up to 40 people);<br />
            summer veranda (24 people).<br /><br />
            Delivery via the Crimea service is also available.Food:<br />
            <a href="https://xn----8sbldxm1a2g.xn--p1ai/sevastopol/restaurants/sirocco/">Go</a>
            <span class="text-wrapper-16">https://xn----8sbldxm1a2g.xn--p1ai/sevastopol/restaurants/sirocco/</span>
        </span>',
        "Staff" => '<span class="span">
        Our chef is Luca Ballestra, a native of Naples,<br />
         He has been creating culinary masterpieces for more than 15 years and has developed<br />
          the menu for each restaurant in our chain. In all<br />
           His best students work in restaurants.<br /><br />
           Also in the team —
        sommeliers, bakers, pastry chefs and<br />
         professional waiters.
      </span>',
        "Awards"=> '<span class="span">
        The best Mediterranean restaurant" according to <br />
         Gastronomy Awards 2023
         <br />
         <br />
         It is included in the TOP 50 restaurants of Crimea according to Afisha
        </span>',
        "Contacts"=>'<span class="span">
         <br />General Order acceptance number: +7 (978) 111 11 11< br />
         <br />VKontakte: @sirocco_rest<br />
         <br />Telegram: @sirocco_rest
      </span>'
    ];
    const reviews = [
        "Настоящее погружение в атмосферу Средиземноморья! В Sirocco потрясающая кухня — свежайшие морепродукты, ароматные специи и идеально приготовленные паста и рыба. Обслуживание внимательное, но ненавязчивое. Вернусь сюда ещё не раз!",
        "Хорошее соотношение цены и качества. Порции большие, продукты свежие, атмосфера расслабляющая. Очень понравились тапас и десерты — особенно тирамису с фисташкой. Рекомендую для уютных ужинов.",
        "Лучший ресторан средиземноморской кухни в городе! Блюда из осьминога и ризотто с шафраном были просто восхитительны. Отдельное спасибо шефу за авторские соусы и отличные рекомендации по вину.",
        "Очень уютное место с красивым интерьером и живой музыкой по вечерам. Брали мезе-сет и лавандовый лимонад — всё было великолепно. Единственное, хотелось бы чуть быстрее подачу блюд. В остальном — восторг!"
    ];
}
