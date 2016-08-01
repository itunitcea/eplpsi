<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('ProvinceTableSeeder'); 
        $this->call('AppCategoriesTableSeeder');
        $this->call('ApplicationTypeTableSeeder');
        $this->call('ChemicalUsedTableSeeder'); 
        $this->call('DistrictTableSeeder'); 
        $this->call('EPLCategoryTableSeeder'); 
        $this->call('EPLAuthorityTableSeeder'); 
        $this->call('FeetypeTableSeeder');
        $this->call('FilenoRefTableSeeder'); 
        $this->call('LocalAuthorityTableSeeder'); 
        $this->call('OfficeTypeTableSeeder');
        $this->call('OfficeTableSeeder');
        $this->call('PayrefTableSeeder'); 
        $this->call('Product_ByProductsTableSeeder');
        $this->call('SectorTableSeeder');
        $this->call('TrNoTableSeeder');
        $this->call('UploadFilesTableSeeder');
        $this->call('UserType');    
        $this->call('DuesTableSeeder'); 
        $this->call('EpaymentTableSeeder'); 
        $this->call('FeeTableSeeder');
         
        $this->call('FuelTableSeeder');
        $this->call('InsGroupOfficerTableSeeder');
        $this->call('InspectionGroupTableSeeder');
        $this->call('InspectionTableSeeder');
        $this->call('NoticesTableSeeder');
        $this->call('RawMaterialsTableSeeder');
        $this->call('RemindersTableSeeder');
        

        $this->call('EPL_LicenceTableSeeder');
        $this->call('WaterTableSeeder');
        $this->call('IndustryTableSeeder');
        $this->call('Ind_EPLContactInfoTableSeeder');

        $this->call('SolidWasteTableSeeder');

        $this->call('SecurityTableSeeder');
        $this->call('Energy_ReqtTableSeeder');
        $this->call('Atmospheric_EmissionTableSeeder');
        $this->call('EPLTypeTableSeeder');
        $this->call('NoiseTableSeeder');

        //Model::reguard();
    }
}
