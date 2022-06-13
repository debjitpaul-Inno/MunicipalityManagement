<?php

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $permissions = [
            [
                "title" => 'dashboard',
                "slug" => 'dashboard.index',
            ],
            //profile
            [
                "title" => 'show profile',
                "slug" => 'profile.show',
            ],
            [
                "title" => 'edit profile view',
                "slug" => 'profile.edit',
            ],
            [
                "title" => 'update profile',
                "slug" => 'profile.update',
            ],
            //ward
            [
                "title" => 'ward list',
                "slug" => 'ward.index',
            ],
            [
                "title" => 'create ward view',
                "slug" => 'ward.create',
            ],
            [
                "title" => 'store ward',
                "slug" => 'ward.store',
            ],
            [
                "title" => 'ward info',
                "slug" => 'ward.show',
            ],
            [
                "title" => 'ward edit view',
                "slug" => 'ward.edit',
            ],
            [
                "title" => 'update ward',
                "slug" => 'ward.update',
            ],
            [
                "title" => 'ward delete view',
                "slug" => 'ward.delete',
            ],
            [
                "title" => 'delete ward',
                "slug" => 'ward.destroy',
            ],
            //employee
            [
                "title" => 'employee list',
                "slug" => 'employee.index',
            ],
            [
                "title" => 'employee create view',
                "slug" => 'employee.create',
            ],
            [
                "title" => 'store employee',
                "slug" => 'employee.store',
            ],
            [
                "title" => 'employee info',
                "slug" => 'employee.show',
            ],
            [
                "title" => 'employee edit view',
                "slug" => 'employee.edit',
            ],
            [
                "title" => 'update employee',
                "slug" => 'employee.update',
            ],
            [
                "title" => 'employee delete view',
                "slug" => 'employee.delete',
            ],
            [
                "title" => 'delete employee',
                "slug" => 'employee.destroy',
            ],
            [
                "title" => 'download employee image',
                "slug" => 'employee.downloadImage',
            ],
            [
                "title" => 'download file',
                "slug" => 'employee.downloadFile',
            ],

            //people
            [
                "title" => 'people list',
                "slug" => 'people.index',
            ],
            [
                "title" => 'people create view',
                "slug" => 'people.create',
            ],
            [
                "title" => 'store people',
                "slug" => 'people.store',
            ],
            [
                "title" => 'people info',
                "slug" => 'people.show',
            ],

            [
                "title" => 'people edit view',
                "slug" => 'people.edit',
            ],
            [
                "title" => 'update people',
                "slug" => 'people.update',
            ],
            [
                "title" => 'people delete view',
                "slug" => 'people.delete',
            ],
            [
                "title" => 'delete people',
                "slug" => 'people.destroy',
            ],
            [
                "title" => 'download people image',
                "slug" => 'people.download',
            ],

            //commissioner
            [
                "title" => 'commissioner list',
                "slug" => 'commissioner.index',
            ],
            [
                "title" => 'commissioner info',
                "slug" => 'commissioner.show',
            ],
            //market
            [
                "title" => 'market list',
                "slug" => 'market.index',
            ],
            [
                "title" => 'market create view',
                "slug" => 'market.create',
            ],
            [
                "title" => 'store market',
                "slug" => 'market.store',
            ],
            [
                "title" => 'market info',
                "slug" => 'market.show',
            ],  [
                "title" => 'market edit view',
                "slug" => 'market.edit',
            ],
            [
                "title" => 'update market',
                "slug" => 'market.update',
            ],
            [
                "title" => 'market delete view',
                "slug" => 'market.delete',
            ],
            [
                "title" => 'delete market',
                "slug" => 'market.destroy',
            ],

            //hospital
            [
                "title" => 'hospital list',
                "slug" => 'hospital.index',
            ],
            [
                "title" => 'hospital create view',
                "slug" => 'hospital.create',
            ],
            [
                "title" => 'store hospital',
                "slug" => 'hospital.store',
            ],
            [
                "title" => 'hospital info',
                "slug" => 'hospital.show',
            ],  [
                "title" => 'hospital edit view',
                "slug" => 'hospital.edit',
            ],
            [
                "title" => 'update hospital',
                "slug" => 'hospital.update',
            ],
            [
                "title" => 'hospital delete view',
                "slug" => 'hospital.delete',
            ],
            [
                "title" => 'delete hospital',
                "slug" => 'hospital.destroy',
            ],

            //education institute
            [
                "title" => 'education institution list',
                "slug" => 'educationInstitution.index',
            ],
            [
                "title" => 'education institution create view',
                "slug" => 'educationInstitution.create',
            ],
            [
                "title" => 'store education institution',
                "slug" => 'educationInstitution.store',
            ],
            [
                "title" => 'education institution info',
                "slug" => 'educationInstitution.show',
            ],
            [
                "title" => 'education institution edit view',
                "slug" => 'educationInstitution.edit',
            ],
            [
                "title" => 'update education institution',
                "slug" => 'educationInstitution.update',
            ],
            [
                "title" => 'education institution delete view',
                "slug" => 'educationInstitution.delete',
            ],
            [
                "title" => 'delete education institution',
                "slug" => 'educationInstitution.destroy',
            ],

            //public toilet
            [
                "title" => 'public toilet list',
                "slug" => 'publicToilet.index',
            ],
            [
                "title" => 'public toilet create view',
                "slug" => 'publicToilet.create',
            ],
            [
                "title" => 'store public toilet',
                "slug" => 'publicToilet.store',
            ],
            [
                "title" => 'public toilet info',
                "slug" => 'publicToilet.show',
            ],
            [
                "title" => 'public toilet edit view',
                "slug" => 'publicToilet.edit',
            ],
            [
                "title" => 'update public toilet',
                "slug" => 'publicToilet.update',
            ],
            [
                "title" => 'public toilet delete view',
                "slug" => 'publicToilet.delete',
            ],
            [
                "title" => 'delete public toilet',
                "slug" => 'publicToilet.destroy',
            ],
            //notice
            [
                "title" => 'notice list',
                "slug" => 'notice.index',
            ],
            [
                "title" => 'notice create view',
                "slug" => 'notice.create',
            ],
            [
                "title" => 'store notice',
                "slug" => 'notice.store',
            ],
            [
                "title" => 'notice info',
                "slug" => 'notice.show',
            ],
            [
                "title" => 'notice edit view',
                "slug" => 'notice.edit',
            ],
            [
                "title" => 'update notice',
                "slug" => 'notice.update',
            ],
            [
                "title" => 'notice delete view',
                "slug" => 'notice.delete',
            ],
            [
                "title" => 'delete notice',
                "slug" => 'notice.destroy',
            ],
            [
                "title" => 'download notice',
                "slug" => 'notice.download',
            ],

            //official form
            [
                "title" => 'official form list',
                "slug" => 'officialForm.index',
            ],
            [
                "title" => 'official form create view',
                "slug" => 'officialForm.create',
            ],
            [
                "title" => 'store official form',
                "slug" => 'officialForm.store',
            ],
            [
                "title" => 'official form info',
                "slug" => 'officialForm.show',
            ],
            [
                "title" => 'official form edit view',
                "slug" => 'officialForm.edit',
            ],
            [
                "title" => 'update official form',
                "slug" => 'officialForm.update',
            ],
            [
                "title" => 'official form delete view',
                "slug" => 'officialForm.delete',
            ],
            [
                "title" => 'delete official form',
                "slug" => 'officialForm.destroy',
            ],
            [
                "title" => 'download official form',
                "slug" => 'officialForm.downloadFile',
            ],

            //work
            [
                "title" => 'work list',
                "slug" => 'work.index',
            ],
            [
                "title" => 'work create view',
                "slug" => 'work.create',
            ],
            [
                "title" => 'store work',
                "slug" => 'work.store',
            ],
            [
                "title" => 'work info',
                "slug" => 'work.show',
            ],
            [
                "title" => 'work edit view',
                "slug" => 'work.edit',
            ],
            [
                "title" => 'update work',
                "slug" => 'work.update',
            ],
            [
                "title" => 'work delete view',
                "slug" => 'work.delete',
            ],
            [
                "title" => 'delete work',
                "slug" => 'work.destroy',
            ],

            //vehicle license
            [
                "title" => 'vehicle licence list',
                "slug" => 'vehicleLicence.index',
            ],
            [
                "title" => 'vehicle licence create view',
                "slug" => 'vehicleLicence.create',
            ],
            [
                "title" => 'store vehicle licence',
                "slug" => 'vehicleLicence.store',
            ],
            [
                "title" => 'vehicle licence info',
                "slug" => 'vehicleLicence.show',
            ],
            [
                "title" => 'vehicle licence edit view',
                "slug" => 'vehicleLicence.edit',
            ],
            [
                "title" => 'update vehicle licence',
                "slug" => 'vehicleLicence.update',
            ],
            [
                "title" => 'vehicle licence delete view',
                "slug" => 'vehicleLicence.delete',
            ],
            [
                "title" => 'delete vehicle licence',
                "slug" => 'vehicleLicence.destroy',
            ],
            [
                "title" => 'vehicle licence renew view',
                "slug" => 'vehicleLicence.renew',
            ],
            [
                "title" => 'renew vehicle licence',
                "slug" => 'vehicleLicence.renewUpdate',
            ],

            //vehicle type
            [
                "title" => 'vehicle type list',
                "slug" => 'vehicleType.index',
            ],
            [
                "title" => 'vehicle type create view',
                "slug" => 'vehicleType.create',
            ],
            [
                "title" => 'store vehicle type',
                "slug" => 'vehicleType.store',
            ],
            [
                "title" => 'vehicle type info',
                "slug" => 'vehicleType.show',
            ],
            [
                "title" => 'vehicle type edit view',
                "slug" => 'vehicleType.edit',
            ],
            [
                "title" => 'update vehicle type',
                "slug" => 'vehicleType.update',
            ],
            [
                "title" => 'vehicle type delete view',
                "slug" => 'vehicleType.delete',
            ],
            [
                "title" => 'delete vehicle type',
                "slug" => 'vehicleType.destroy',
            ],

            //relief category
            [
                "title" => 'relief category list',
                "slug" => 'reliefCategory.index',
            ],
            [
                "title" => 'relief category create view',
                "slug" => 'reliefCategory.create',
            ],
            [
                "title" => 'store relief category',
                "slug" => 'reliefCategory.store',
            ],
            [
                "title" => 'relief category info',
                "slug" => 'reliefCategory.show',
            ],
            [
                "title" => 'relief category edit view',
                "slug" => 'reliefCategory.edit',
            ],
            [
                "title" => 'update relief category',
                "slug" => 'reliefCategory.update',
            ],
            [
                "title" => 'relief category delete view',
                "slug" => 'reliefCategory.delete',
            ],
            [
                "title" => 'delete relief category',
                "slug" => 'reliefCategory.destroy',
            ],

            //relief card
            [
                "title" => 'relief card list',
                "slug" => 'reliefCard.index',
            ],
            [
                "title" => 'relief card create view',
                "slug" => 'reliefCard.create',
            ],
            [
                "title" => 'store relief card',
                "slug" => 'reliefCard.store',
            ],
            [
                "title" => 'relief card info',
                "slug" => 'reliefCard.show',
            ],
            [
                "title" => 'relief card edit view',
                "slug" => 'reliefCard.edit',
            ],
            [
                "title" => 'update relief card',
                "slug" => 'reliefCard.update',
            ],
            [
                "title" => 'relief card delete view',
                "slug" => 'reliefCard.delete',
            ],
            [
                "title" => 'delete relief card',
                "slug" => 'reliefCard.destroy',
            ],

            //contractor license
            [
                "title" => 'contractor licence list',
                "slug" => 'contractorLicence.index',
            ],
            [
                "title" => 'contractor licence create view',
                "slug" => 'contractorLicence.create',
            ],
            [
                "title" => 'store contractor licence',
                "slug" => 'contractorLicence.store',
            ],
            [
                "title" => 'contractor licence info',
                "slug" => 'contractorLicence.show',
            ],
            [
                "title" => 'contractor licence edit view',
                "slug" => 'contractorLicence.edit',
            ],
            [
                "title" => 'update contractor licence',
                "slug" => 'contractorLicence.update',
            ],
            [
                "title" => 'contractor licence delete view',
                "slug" => 'contractorLicence.delete',
            ],
            [
                "title" => 'delete contractor licence',
                "slug" => 'contractorLicence.destroy',
            ],
            [
                "title" => 'download contractor licence document',
                "slug" => 'contractorLicence.download',
            ],
            [
                "title" => 'contractor licence renew view',
                "slug" => 'contractorLicence.renew',
            ],
            [
                "title" => 'renew contractor licence',
                "slug" => 'contractorLicence.renewUpdate',
            ],
            [
                "title" => 'contractor licence history',
                "slug" => 'contractorLicence.history',
            ],

            //trade license
            [
                "title" => 'trade licence list',
                "slug" => 'tradeLicence.index',
            ],
            [
                "title" => 'trade licence create view',
                "slug" => 'tradeLicence.create',
            ],
            [
                "title" => 'store trade licence',
                "slug" => 'tradeLicence.store',
            ],
            [
                "title" => 'trade licence info',
                "slug" => 'tradeLicence.show',
            ],
            [
                "title" => 'trade licence edit view',
                "slug" => 'tradeLicence.edit',
            ],
            [
                "title" => 'update trade licence',
                "slug" => 'tradeLicence.update',
            ],
            [
                "title" => 'trade licence delete view',
                "slug" => 'tradeLicence.delete',
            ],
            [
                "title" => 'delete trade licence',
                "slug" => 'tradeLicence.destroy',
            ],
            [
                "title" => 'download trade licence document',
                "slug" => 'tradeLicence.download',
            ],
            [
                "title" => 'trade licence renew view',
                "slug" => 'tradeLicence.renew',
            ],
            [
                "title" => 'renew trade licence',
                "slug" => 'tradeLicence.renewUpdate',
            ],
            [
                "title" => 'trade licence history',
                "slug" => 'tradeLicence.history',
            ],

            //license category
            [
                "title" => 'category list',
                "slug" => 'category.index',
            ],
            [
                "title" => 'category create view',
                "slug" => 'category.create',
            ],
            [
                "title" => 'store category',
                "slug" => 'category.store',
            ],
            [
                "title" => 'category info',
                "slug" => 'category.show',
            ],
            [
                "title" => 'category edit view',
                "slug" => 'category.edit',
            ],
            [
                "title" => 'update category',
                "slug" => 'category.update',
            ],
            [
                "title" => 'category delete view',
                "slug" => 'category.delete',
            ],
            [
                "title" => 'delete category',
                "slug" => 'category.destroy',
            ],

            // license sub-category
            [
                "title" => 'sub category list',
                "slug" => 'subCategory.index',
            ],
            [
                "title" => 'sub category create view',
                "slug" => 'subCategory.create',
            ],
            [
                "title" => 'store sub category',
                "slug" => 'subCategory.store',
            ],
            [
                "title" => 'sub category info',
                "slug" => 'subCategory.show',
            ],
            [
                "title" => 'sub category edit view',
                "slug" => 'subCategory.edit',
            ],
            [
                "title" => 'update sub category',
                "slug" => 'subCategory.update',
            ],
            [
                "title" => 'sub category delete view',
                "slug" => 'subCategory.delete',
            ],
            [
                "title" => 'delete sub category',
                "slug" => 'subCategory.destroy',
            ],

            //character certificate
            [
                "title" => 'character certificate list',
                "slug" => 'characterCertificate.index',
            ],
            [
                "title" => 'character certificate create view',
                "slug" => 'characterCertificate.create',
            ],
            [
                "title" => 'store character certificate',
                "slug" => 'characterCertificate.store',
            ],
            [
                "title" => 'character certificate info',
                "slug" => 'characterCertificate.show',
            ],
            [
                "title" => 'character certificate edit view',
                "slug" => 'characterCertificate.edit',
            ],
            [
                "title" => 'update character certificate',
                "slug" => 'characterCertificate.update',
            ],
            [
                "title" => 'character certificate delete view',
                "slug" => 'characterCertificate.delete',
            ],
            [
                "title" => 'delete character certificate',
                "slug" => 'characterCertificate.destroy',
            ],

            //equipment category
            [
                "title" => 'equipment category list',
                "slug" => 'equipmentCategory.index',
            ],
            [
                "title" => 'equipment category create view',
                "slug" => 'equipmentCategory.create',
            ],
            [
                "title" => 'store equipment category',
                "slug" => 'equipmentCategory.store',
            ],
            [
                "title" => 'equipment category info',
                "slug" => 'equipmentCategory.show',
            ],
            [
                "title" => 'equipment category edit view',
                "slug" => 'equipmentCategory.edit',
            ],
            [
                "title" => 'update equipment category',
                "slug" => 'equipmentCategory.update',
            ],
            [
                "title" => 'equipment category delete view',
                "slug" => 'equipmentCategory.delete',
            ],
            [
                "title" => 'delete equipment category',
                "slug" => 'equipmentCategory.destroy',
            ],

            //equipments
            [
                "title" => 'equipment list',
                "slug" => 'equipment.index',
            ],
            [
                "title" => 'equipment create view',
                "slug" => 'equipment.create',
            ],
            [
                "title" => 'store equipment',
                "slug" => 'equipment.store',
            ],
            [
                "title" => 'equipment info',
                "slug" => 'equipment.show',
            ],
            [
                "title" => 'equipment edit view',
                "slug" => 'equipment.edit',
            ],
            [
                "title" => 'update equipment',
                "slug" => 'equipment.update',
            ],
            [
                "title" => 'equipment delete view',
                "slug" => 'equipment.delete',
            ],
            [
                "title" => 'delete equipment',
                "slug" => 'equipment.destroy',
            ],

            //tender
            [
                "title" => 'tender list',
                "slug" => 'tender.index',
            ],
            [
                "title" => 'tender create view',
                "slug" => 'tender.create',
            ],
            [
                "title" => 'store tender',
                "slug" => 'tender.store',
            ],
            [
                "title" => 'tender info',
                "slug" => 'tender.show',
            ],
            [
                "title" => 'tender edit view',
                "slug" => 'tender.edit',
            ],
            [
                "title" => 'update tender',
                "slug" => 'tender.update',
            ],
            [
                "title" => 'tender delete view',
                "slug" => 'tender.delete',
            ],
            [
                "title" => 'delete tender',
                "slug" => 'tender.destroy',
            ],
            [
                "title" => 'download tender',
                "slug" => 'tender.downloadFile',
            ],

            //circular
            [
                "title" => 'circular list',
                "slug" => 'circular.index',
            ],
            [
                "title" => 'circular create view',
                "slug" => 'circular.create',
            ],
            [
                "title" => 'store circular',
                "slug" => 'circular.store',
            ],
            [
                "title" => 'circular info',
                "slug" => 'circular.show',
            ],
            [
                "title" => 'circular edit view',
                "slug" => 'circular.edit',
            ],
            [
                "title" => 'update circular',
                "slug" => 'circular.update',
            ],
            [
                "title" => 'circular delete view',
                "slug" => 'circular.delete',
            ],
            [
                "title" => 'delete circular',
                "slug" => 'circular.destroy',
            ],
            [
                "title" => 'download circular',
                "slug" => 'circular.downloadFile',
            ],
            //emergency call
            [
                "title" => 'emergency call list',
                "slug" => 'emergencyCall.index',
            ],
            [
                "title" => 'emergency call create view',
                "slug" => 'emergencyCall.create',
            ],
            [
                "title" => 'store emergency call',
                "slug" => 'emergencyCall.store',
            ],
            [
                "title" => 'emergency call info',
                "slug" => 'emergencyCall.show',
            ],
            [
                "title" => 'emergency call edit view',
                "slug" => 'emergencyCall.edit',
            ],
            [
                "title" => 'update emergency call',
                "slug" => 'emergencyCall.update',
            ],
            [
                "title" => 'emergency call delete view',
                "slug" => 'emergencyCall.delete',
            ],
            [
                "title" => 'delete emergency call',
                "slug" => 'emergencyCall.destroy',
            ],
            //official order
            [
                "title" => 'official order list',
                "slug" => 'officialOrder.index',
            ],
            [
                "title" => 'official order create view',
                "slug" => 'officialOrder.create',
            ],
            [
                "title" => 'store official order',
                "slug" => 'officialOrder.store',
            ],
            [
                "title" => 'official order info',
                "slug" => 'officialOrder.show',
            ],
            [
                "title" => 'official order edit view',
                "slug" => 'officialOrder.edit',
            ],
            [
                "title" => 'update official order',
                "slug" => 'officialOrder.update',
            ],
            [
                "title" => 'official order delete view',
                "slug" => 'officialOrder.delete',
            ],
            [
                "title" => 'delete official order',
                "slug" => 'officialOrder.destroy',
            ],
            [
                "title" => 'download official order',
                "slug" => 'officialOrder.download',
            ],

            //waste management
            [
                "title" => 'waste management list',
                "slug" => 'wasteManagement.index',
            ],
            [
                "title" => 'waste management create view',
                "slug" => 'wasteManagement.create',
            ],
            [
                "title" => 'store waste management',
                "slug" => 'wasteManagement.store',
            ],
            [
                "title" => 'waste management info',
                "slug" => 'wasteManagement.show',
            ],
            [
                "title" => 'waste management edit view',
                "slug" => 'wasteManagement.edit',
            ],
            [
                "title" => 'update waste management',
                "slug" => 'wasteManagement.update',
            ],
            [
                "title" => 'waste management delete view',
                "slug" => 'wasteManagement.delete',
            ],
            [
                "title" => 'delete waste management',
                "slug" => 'wasteManagement.destroy',
            ],
            [
                "title" => 'download waste management',
                "slug" => 'wasteManagement.download',
            ],

            //sms template
            [
                "title" => 'sms template list',
                "slug" => 'smsTemplate.index',
            ],
            [
                "title" => 'sms template create view',
                "slug" => 'smsTemplate.create',
            ],
            [
                "title" => 'store sms template',
                "slug" => 'smsTemplate.store',
            ],
            [
                "title" => 'sms template delete view',
                "slug" => 'smsTemplate.delete',
            ],
            [
                "title" => 'delete sms template',
                "slug" => 'smsTemplate.destroy',
            ],

            //sms
            [
                "title" => 'sms list',
                "slug" => 'sms.index',
            ],
            [
                "title" => 'sms send',
                "slug" => 'sms.send',
            ],

            //equipment rent
            [
                "title" => 'equipment rent list',
                "slug" => 'equipmentRent.index',
            ],
            [
                "title" => 'equipment rent create view',
                "slug" => 'equipmentRent.create',
            ],
            [
                "title" => 'store equipment rent',
                "slug" => 'equipmentRent.store',
            ],
            [
                "title" => 'equipment rent info',
                "slug" => 'equipmentRent.show',
            ],
            [
                "title" => 'equipment rent edit view',
                "slug" => 'equipmentRent.edit',
            ],
            [
                "title" => 'update equipment rent',
                "slug" => 'equipmentRent.update',
            ],
            [
                "title" => 'equipment rent delete view',
                "slug" => 'equipmentRent.delete',
            ],
            [
                "title" => 'delete equipment rent',
                "slug" => 'equipmentRent.destroy',
            ],

            //street lamp
            [
                "title" => 'street lamp list',
                "slug" => 'streetLamp.index',
            ],
            [
                "title" => 'street lamp create view',
                "slug" => 'streetLamp.create',
            ],
            [
                "title" => 'store street lamp',
                "slug" => 'streetLamp.store',
            ],
            [
                "title" => 'street lamp info',
                "slug" => 'streetLamp.show',
            ],
            [
                "title" => 'street lamp edit view',
                "slug" => 'streetLamp.edit',
            ],
            [
                "title" => 'update street lamp',
                "slug" => 'streetLamp.update',
            ],
            [
                "title" => 'street lamp delete view',
                "slug" => 'streetLamp.delete',
            ],
            [
                "title" => 'delete street lamp',
                "slug" => 'streetLamp.destroy',
            ],

            //invoice
//            [
//                "title" => 'invoice list',
//                "slug" => 'invoice.index',
//            ],
            [
                "title" => 'invoice create view',
                "slug" => 'invoice.create',
            ],
            [
                "title" => 'store invoice',
                "slug" => 'invoice.store',
            ],
//            [
//                "title" => 'invoice info',
//                "slug" => 'invoice.show',
//            ],
//            [
//                "title" => 'invoice edit view',
//                "slug" => 'invoice.edit',
//            ],
//            [
//                "title" => 'update invoice',
//                "slug" => 'invoice.update',
//            ],

            //permission
            [
                "title" => 'permission list',
                "slug" => 'permission.index',
            ],
            [
                "title" => 'permission create view',
                "slug" => 'permission.create',
            ],
            [
                "title" => 'store permission',
                "slug" => 'permission.store',
            ],
            [
                "title" => 'permission info',
                "slug" => 'permission.show',
            ],
            [
                "title" => 'permission edit view',
                "slug" => 'permission.edit',
            ],
            [
                "title" => 'update permission',
                "slug" => 'permission.update',
            ],
            [
                "title" => 'permission delete view',
                "slug" => 'permission.delete',
            ],
            [
                "title" => 'delete permission',
                "slug" => 'permission.destroy',
            ],

            //role
            [
                "title" => 'role list',
                "slug" => 'role.index',
            ],
            [
                "title" => 'role create view',
                "slug" => 'role.create',
            ],
            [
                "title" => 'store role',
                "slug" => 'role.store',
            ],
            [
                "title" => 'role info',
                "slug" => 'role.show',
            ],
            [
                "title" => 'role edit view',
                "slug" => 'role.edit',
            ],
            [
                "title" => 'update role',
                "slug" => 'role.update',
            ],
            [
                "title" => 'role delete view',
                "slug" => 'role.delete',
            ],
            [
                "title" => 'delete role',
                "slug" => 'role.destroy',
            ],


        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
