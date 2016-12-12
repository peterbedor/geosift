<?php

use DB;
use Illuminate\Database\Seeder;

class FieldTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fieldTypes = [
			[
				'id' => 1,
				'name' => 'Photo Gallery'
			],
			[
				'id' => 2,
				'name' => 'Toggle'
			],
			[
				'id' => 3,
				'name' => 'Date'
			],
			[
				'id' => 4,
				'name' => 'File'
			],
			[
				'id' => 5,
				'name' => 'Simple List'
			],
			[
				'id' => 6,
				'name' => 'Grid'
			],
			[
				'id' => 7,
				'name' => 'Select'
			],
			[
				'id' => 8,
				'name' => 'Relationship'
			],
			[
				'id' => 9,
				'name' => 'Link'
			],
			[
				'id' => 10,
				'name' => 'Textbox'
			],
			[
				'id' => 11,
				'name' => 'Textarea'
			],
			[
				'id' => 12,
				'name' => 'Phone / Fax'
			],
			[
				'id' => 13,
				'name' => 'WYSIWYG'
			],
			[
				'id' => 14,
				'name' => 'Tags'
			]
		];

		foreach ($fieldTypes as $fieldType) {
			DB::table('field_types')
				->insert([
					'id' => $fieldType['id'],
					'name' => $fieldType['name']
				]);
		}
    }
}
