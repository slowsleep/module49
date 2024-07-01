<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{
		return array(
			array(
				'year' => '2023',
				'site' => 'https://github.com/slowsleep/fruit-list',
				'tryIt' => 'https://slowsleep.github.io/fruit-list/',
				'name' => 'Шаблон итоговой работы для модуля "Базовый JS. Циклы и массивы"'
			),
			array(
				'year' => '2024',
				'site' => 'https://github.com/slowsleep/sf_oopapp',
				'tryIt' => 'https://slowsleep.github.io/sf_oopapp/',
				'name' => 'Учебный проект Kanban-доска'
			),
		);
	}
}
