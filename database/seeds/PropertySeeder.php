<?php

use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property')->insert([
            [
                'direction'=>  'Ap #549-7395 Ut Rd.',
                'city_id'=>  4,
                'phone'=>  '334-052-0954',
                'code'=>  '85328',
                'type_id'=>  2,
                'price'=>  '$30,746'
            ],
            [
                'direction'=> 'P.O. Box 657, 9831 Cursus St.',
                'city_id'=> 5,
                'phone'=> '488-441-5521',
                'code'=> '04436',
                'type_id'=> 3,
                'price'=> '$71,045'
            ],
            [
                'direction'=> 'Ap #325-2507 Quisque Av.',
                'city_id'=> 2,
                'phone'=> '623-807-2869',
                'code'=> '89804',
                'type_id'=> 3,
                'price'=> '$36,087'
            ],
            [
                'direction'=> '347-866 Laoreet Road',
                'city_id'=> 2,
                'phone'=> '997-640-8188',
                'code'=> '94526-134',
                'type_id'=> 3,
                'price'=> '$16,048'
            ],
            [
                'direction'=> '4732 Ipsum. Rd.',
                'city_id'=> 1,
                'phone'=> '802-414-8872',
                'code'=> '162925',
                'type_id'=> 2,
                'price'=> '$45,912'
            ],
            [
                'direction'=> '672-9576 Consectetuer Road',
                'city_id'=> 5,
                'phone'=> '355-601-5749',
                'code'=> '210020',
                'type_id'=> 3,
                'price'=> '$64,370'
            ],
            [
                'direction'=> '549-5766 Sodales St.',
                'city_id'=> 5,
                'phone'=> '557-228-6918',
                'code'=> '16794',
                'type_id'=> 2,
                'price'=> '$2,846'
            ],
            [
                'direction'=> 'P.O. Box 847, 2589 In Av.',
                'city_id'=> 6,
                'phone'=> '390-713-8687',
                'code'=> '70689',
                'type_id'=> 1,
                'price'=> '$60,951'
            ],
            [
                'direction'=> '175-4344 Nec, Ave',
                'city_id'=> 5,
                'phone'=> '578-170-6179',
                'code'=> 'P0C 0G3',
                'type_id'=> 3,
                'price'=> '$58,902'
            ],
            [
                'direction'=> 'P.O. Box 497, 8679 Turpis. St.',
                'city_id'=> 4,
                'phone'=> '870-559-3430',
                'code'=> '7029',
                'type_id'=> 2,
                'price'=> '$17,759'
            ],
            [
                'direction'=> '844-8312 Molestie Road',
                'city_id'=> 3,
                'phone'=> '147-920-5435',
                'code'=> '5237JG',
                'type_id'=> 2,
                'price'=> '$91,067'
            ],
            [
                'direction'=> 'P.O. Box 494, 674 Amet, Street',
                'city_id'=> 4,
                'phone'=> '056-617-2556',
                'code'=> '684445',
                'type_id'=> 2,
                'price'=> '$36,155'
            ],
            [
                'direction'=> 'P.O. Box 466, 2795 Velit. Avenue',
                'city_id'=> 4,
                'phone'=> '252-330-0116',
                'code'=> '5422',
                'type_id'=> 1,
                'price'=> '$78,947'
            ],
            [
                'direction'=> 'P.O. Box 523, 2126 Aliquet Rd.',
                'city_id'=> 5,
                'phone'=> '986-825-6899',
                'code'=> '37045',
                'type_id'=> 3,
                'price'=> '$51,817'
            ],
            [
                'direction'=> 'Ap #669-7718 Cras St.',
                'city_id'=> 4,
                'phone'=> '200-935-8531',
                'code'=> 'RI9 6RT',
                'type_id'=> 2,
                'price'=> '$39,561'
            ],
            [
                'direction'=> '2211 Malesuada Rd.',
                'city_id'=> 2,
                'phone'=> '436-742-7954',
                'code'=> '31519',
                'type_id'=> 1,
                'price'=> '$52,433'
            ],
            [
                'direction'=> 'P.O. Box 181, 7858 Nisi. St.',
                'city_id'=> 1,
                'phone'=> '383-252-8216',
                'code'=> '83594',
                'type_id'=> 1,
                'price'=> '$85,641'
            ],
            [
                'direction'=> '741-2614 Accumsan Rd.',
                'city_id'=> 3,
                'phone'=> '487-609-0106',
                'code'=> '753543',
                'type_id'=> 3,
                'price'=> '$78,854'
            ],
            [
                'direction'=> '829-3250 In Rd.',
                'city_id'=> 4,
                'phone'=> '788-832-7076',
                'code'=> '783917',
                'type_id'=> 3,
                'price'=> '$64,471'
            ],
            [
                'direction'=> 'Ap #393-3363 Fringilla Road',
                'city_id'=> 5,
                'phone'=> '335-278-9678',
                'code'=> '8635',
                'type_id'=> 1,
                'price'=> '$47,420'
            ],
            [
                'direction'=> 'Ap #247-8024 Curabitur St.',
                'city_id'=> 3,
                'phone'=> '167-013-1429',
                'code'=> '15971',
                'type_id'=> 3,
                'price'=> '$28,795'
            ],
            [
                'direction'=> '995-1099 Id, Road',
                'city_id'=> 6,
                'phone'=> '491-394-8799',
                'code'=> '37-346',
                'type_id'=> 1,
                'price'=> '$69,505'
            ],
            [
                'direction'=> 'Ap #176-8333 Gravida St.',
                'city_id'=> 3,
                'phone'=> '339-324-8859',
                'code'=> '0318YB',
                'type_id'=> 3,
                'price'=> '$73,231'
            ],
            [
                'direction'=> '340-985 Lobortis. Avenue',
                'city_id'=> 6,
                'phone'=> '049-063-4896',
                'code'=> '5411',
                'type_id'=> 3,
                'price'=> '$83,847'
            ],
            [
                'direction'=> '992-7214 Pharetra Rd.',
                'city_id'=> 3,
                'phone'=> '257-364-7011',
                'code'=> '1045SO',
                'type_id'=> 2,
                'price'=> '$93,907'
            ],
            [
                'direction'=> '7705 Fusce St.',
                'city_id'=> 6,
                'phone'=> '363-540-9113',
                'code'=> '9802',
                'type_id'=> 3,
                'price'=> '$21,796'
            ],
            [
                'direction'=> '723-5458 Neque. Ave',
                'city_id'=> 4,
                'phone'=> '512-886-8792',
                'code'=> '1038',
                'type_id'=> 2,
                'price'=> '$97,134'
            ],
            [
                'direction'=> 'Ap #246-9877 Ultricies Rd.',
                'city_id'=> 6,
                'phone'=> '423-014-6013',
                'code'=> '61483',
                'type_id'=> 2,
                'price'=> '$32,659'
            ],
            [
                'direction'=> 'Ap #712-3234 Nunc Road',
                'city_id'=> 3,
                'phone'=> '334-030-0048',
                'code'=> '9738',
                'type_id'=> 1,
                'price'=> '$14,560'
            ],
            [
                'direction'=> '4406 Justo Avenue',
                'city_id'=> 1,
                'phone'=> '242-441-7733',
                'code'=> '38707',
                'type_id'=> 3,
                'price'=> '$69,433'
            ],
            [
                'direction'=> 'Ap #172-6600 Vivamus St.',
                'city_id'=> 4,
                'phone'=> '710-649-0830',
                'code'=> '57503',
                'type_id'=> 3,
                'price'=> '$1,986'
            ],
            [
                'direction'=> 'Ap #728-4099 Et, Ave',
                'city_id'=> 1,
                'phone'=> '535-501-0707',
                'code'=> '0242AN',
                'type_id'=> 2,
                'price'=> '$73,668'
            ],
            [
                'direction'=> '4648 Sem Rd.',
                'city_id'=> 6,
                'phone'=> '956-749-3273',
                'code'=> '94323',
                'type_id'=> 1,
                'price'=> '$85,996'
            ],
            [
                'direction'=> 'Ap #539-4295 Volutpat Avenue',
                'city_id'=> 3,
                'phone'=> '904-312-9292',
                'code'=> '894922',
                'type_id'=> 2,
                'price'=> '$38,835'
            ],
            [
                'direction'=> '500-6214 Tempus, Street',
                'city_id'=> 3,
                'phone'=> '168-671-0953',
                'code'=> '5574',
                'type_id'=> 3,
                'price'=> '$62,069'
            ],
            [
                'direction'=> '233-9001 Cum Rd.',
                'city_id'=> 4,
                'phone'=> '670-701-8060',
                'code'=> '20705',
                'type_id'=> 3,
                'price'=> '$32,174'
            ],
            [
                'direction'=> '4084 Sit St.',
                'city_id'=> 5,
                'phone'=> '326-023-8622',
                'code'=> '02187',
                'type_id'=> 1,
                'price'=> '$23,492'
            ],
            [
                'direction'=> 'P.O. Box 825, 9762 Etiam Street',
                'city_id'=> 3,
                'phone'=> '343-695-3228',
                'code'=> '56309',
                'type_id'=> 3,
                'price'=> '$42,579'
            ],
            [
                'direction'=> '5889 Luctus. Ave',
                'city_id'=> 4,
                'phone'=> '259-039-5762',
                'code'=> '6038',
                'type_id'=> 1,
                'price'=> '$41,843'
            ],
            [
                'direction'=> 'Ap #834-3873 Nullam St.',
                'city_id'=> 1,
                'phone'=> '809-587-9484',
                'code'=> '69526',
                'type_id'=> 3,
                'price'=> '$94,728'
            ],
            [
                'direction'=> 'P.O. Box 711, 706 Dis Rd.',
                'city_id'=> 6,
                'phone'=> '354-038-8533',
                'code'=> '65211',
                'type_id'=> 3,
                'price'=> '$90,451'
            ],
            [
                'direction'=> 'P.O. Box 315, 6041 Duis Avenue',
                'city_id'=> 5,
                'phone'=> '186-671-4205',
                'code'=> '893592',
                'type_id'=> 3,
                'price'=> '$2,261'
            ],
            [
                'direction'=> '5640 Dapibus St.',
                'city_id'=> 6,
                'phone'=> '906-342-4567',
                'code'=> '4263',
                'type_id'=> 3,
                'price'=> '$76,404'
            ],
            [
                'direction'=> '5260 Sed Rd.',
                'city_id'=> 4,
                'phone'=> '336-903-7567',
                'code'=> '92501',
                'type_id'=> 2,
                'price'=> '$2,055'
            ],
            [
                'direction'=> 'Ap #864-1235 Mi Rd.',
                'city_id'=> 5,
                'phone'=> '723-547-1102',
                'code'=> 'G9T 9P2',
                'type_id'=> 3,
                'price'=> '$99,508'
            ],
            [
                'direction'=> '8151 Rutrum Rd.',
                'city_id'=> 3,
                'phone'=> '594-072-4670',
                'code'=> '58567',
                'type_id'=> 2,
                'price'=> '$7,952'
            ],
            [
                'direction'=> 'P.O. Box 926, 1798 Pellentesque St.',
                'city_id'=> 4,
                'phone'=> '328-063-3034',
                'code'=> '0547ID',
                'type_id'=> 2,
                'price'=> '$48,882'
            ],
            [
                'direction'=> 'P.O. Box 264, 6488 Euismod Avenue',
                'city_id'=> 2,
                'phone'=> '210-220-4305',
                'code'=> 'J6H 9S9',
                'type_id'=> 1,
                'price'=> '$33,141'
            ],
            [
                'direction'=> 'Ap #694-1472 Orci Ave',
                'city_id'=> 4,
                'phone'=> '362-652-3567',
                'code'=> '63897',
                'type_id'=> 1,
                'price'=> '$88,980'
            ],
            [
                'direction'=> 'P.O. Box 354, 6477 Eget St.',
                'city_id'=> 2,
                'phone'=> '593-092-8585',
                'code'=> '90970-060',
                'type_id'=> 2,
                'price'=> '$35,831'
            ],
            [
                'direction'=> '128-8013 Imperdiet Avenue',
                'city_id'=> 4,
                'phone'=> '611-764-9648',
                'code'=> '727883',
                'type_id'=> 3,
                'price'=> '$99,230'
            ],
            [
                'direction'=> 'Ap #394-8201 Pede. St.',
                'city_id'=> 4,
                'phone'=> '057-000-7888',
                'code'=> '6390',
                'type_id'=> 1,
                'price'=> '$82,679'
            ],
            [
                'direction'=> 'Ap #210-1906 Mauris St.',
                'city_id'=> 4,
                'phone'=> '742-185-0661',
                'code'=> '4116',
                'type_id'=> 2,
                'price'=> '$96,998'
            ],
            [
                'direction'=> '228-2036 Tincidunt Road',
                'city_id'=> 5,
                'phone'=> '565-750-7079',
                'code'=> '7217',
                'type_id'=> 2,
                'price'=> '$54,710'
            ],
            [
                'direction'=> '681-117 Facilisis Street',
                'city_id'=> 6,
                'phone'=> '695-936-1302',
                'code'=> '83809',
                'type_id'=> 2,
                'price'=> '$96,281'
            ],
            [
                'direction'=> 'P.O. Box 665, 3825 Nec St.',
                'city_id'=> 1,
                'phone'=> '859-638-8140',
                'code'=> '843642',
                'type_id'=> 2,
                'price'=> '$3,829'
            ],
            [
                'direction'=> 'Ap #800-4147 In Street',
                'city_id'=> 2,
                'phone'=> '324-489-2139',
                'code'=> '66013',
                'type_id'=> 3,
                'price'=> '$70,069'
            ],
            [
                'direction'=> '297-8960 Libero. Rd.',
                'city_id'=> 2,
                'phone'=> '626-297-1082',
                'code'=> '9133',
                'type_id'=> 3,
                'price'=> '$26,514'
            ],
            [
                'direction'=> '5605 Nisi Ave',
                'city_id'=> 5,
                'phone'=> '842-236-6720',
                'code'=> '188876',
                'type_id'=> 2,
                'price'=> '$68,927'
            ],
            [
                'direction'=> 'P.O. Box 870, 9855 Tristique Avenue',
                'city_id'=> 3,
                'phone'=> '114-453-9481',
                'code'=> '64899',
                'type_id'=> 2,
                'price'=> '$67,772'
            ],
            [
                'direction'=> 'Ap #214-5963 Metus Road',
                'city_id'=> 1,
                'phone'=> '337-930-6310',
                'code'=> '5290KA',
                'type_id'=> 2,
                'price'=> '$71,048'
            ],
            [
                'direction'=> '869 Tempus St.',
                'city_id'=> 4,
                'phone'=> '235-726-7602',
                'code'=> 'Y4V 5A1',
                'type_id'=> 3,
                'price'=> '$90,138'
            ],
            [
                'direction'=> 'P.O. Box 916, 4350 In Avenue',
                'city_id'=> 4,
                'phone'=> '292-391-9640',
                'code'=> '26271',
                'type_id'=> 3,
                'price'=> '$70,212'
            ],
            [
                'direction'=> 'Ap #768-2635 Eget, Avenue',
                'city_id'=> 3,
                'phone'=> '909-006-0105',
                'code'=> '93246',
                'type_id'=> 2,
                'price'=> '$74,320'
            ],
            [
                'direction'=> 'Ap #581-5945 Ullamcorper Road',
                'city_id'=> 5,
                'phone'=> '820-970-3451',
                'code'=> '35826',
                'type_id'=> 1,
                'price'=> '$15,782'
            ],
            [
                'direction'=> 'Ap #298-502 Dolor. Ave',
                'city_id'=> 5,
                'phone'=> '339-015-5616',
                'code'=> '8625GM',
                'type_id'=> 3,
                'price'=> '$27,530'
            ],
            [
                'direction'=> '569-3972 Malesuada Street',
                'city_id'=> 3,
                'phone'=> '712-181-4815',
                'code'=> '857132',
                'type_id'=> 3,
                'price'=> '$56,359'
            ],
            [
                'direction'=> 'Ap #378-8818 Molestie Ave',
                'city_id'=> 2,
                'phone'=> '286-311-5133',
                'code'=> '39945',
                'type_id'=> 3,
                'price'=> '$29,789'
            ],
            [
                'direction'=> '766 Consequat, St.',
                'city_id'=> 2,
                'phone'=> '790-137-7352',
                'code'=> '71804',
                'type_id'=> 2,
                'price'=> '$57,408'
            ],
            [
                'direction'=> '729-3081 Cubilia Rd.',
                'city_id'=> 6,
                'phone'=> '888-946-8086',
                'code'=> 'F7 0YF',
                'type_id'=> 2,
                'price'=> '$87,871'
            ],
            [
                'direction'=> '457-7987 Curae; Rd.',
                'city_id'=> 6,
                'phone'=> '760-938-1297',
                'code'=> '19418',
                'type_id'=> 2,
                'price'=> '$43,727'
            ],
            [
                'direction'=> '6158 Tempor Rd.',
                'city_id'=> 1,
                'phone'=> '690-850-4520',
                'code'=> 'L18 9SC',
                'type_id'=> 3,
                'price'=> '$30,425'
            ],
            [
                'direction'=> 'Ap #693-2983 Class St.',
                'city_id'=> 4,
                'phone'=> '213-536-0655',
                'code'=> '21712',
                'type_id'=> 2,
                'price'=> '$23,311'
            ],
            [
                'direction'=> '841 Scelerisque Rd.',
                'city_id'=> 1,
                'phone'=> '367-551-7660',
                'code'=> 'YY0A 3TD',
                'type_id'=> 3,
                'price'=> '$72,611'
            ],
            [
                'direction'=> '792-7569 Dolor Rd.',
                'city_id'=> 4,
                'phone'=> '261-470-7647',
                'code'=> '14844',
                'type_id'=> 2,
                'price'=> '$98,815'
            ],
            [
                'direction'=> '444-5718 Ut Rd.',
                'city_id'=> 6,
                'phone'=> '041-009-6788',
                'code'=> '8230',
                'type_id'=> 2,
                'price'=> '$50,861'
            ],
            [
                'direction'=> 'Ap #377-8404 Ipsum Street',
                'city_id'=> 4,
                'phone'=> '534-916-5827',
                'code'=> '37234',
                'type_id'=> 3,
                'price'=> '$87,808'
            ],
            [
                'direction'=> '2425 Rutrum Street',
                'city_id'=> 2,
                'phone'=> '494-431-4661',
                'code'=> 'IC54 7IK',
                'type_id'=> 2,
                'price'=> '$93,263'
            ],
            [
                'direction'=> '344-8412 Nisl. St.',
                'city_id'=> 1,
                'phone'=> '050-082-4431',
                'code'=> '99-113',
                'type_id'=> 1,
                'price'=> '$99,947'
            ],
            [
                'direction'=> '9399 Sem Ave',
                'city_id'=> 1,
                'phone'=> '909-320-3004',
                'code'=> '03082',
                'type_id'=> 2,
                'price'=> '$69,922'
            ],
            [
                'direction'=> 'P.O. Box 284, 8629 Egestas. St.',
                'city_id'=> 5,
                'phone'=> '196-562-2718',
                'code'=> 'A8Z 9N1',
                'type_id'=> 2,
                'price'=> '$25,541'
            ],
            [
                'direction'=> '283-2290 Aliquam Street',
                'city_id'=> 4,
                'phone'=> '272-977-8230',
                'code'=> 'G1C 0L5',
                'type_id'=> 1,
                'price'=> '$97,152'
            ],
            [
                'direction'=> 'P.O. Box 787, 1352 Mollis Rd.',
                'city_id'=> 4,
                'phone'=> '580-328-0397',
                'code'=> '63477',
                'type_id'=> 2,
                'price'=> '$70,429'
            ],
            [
                'direction'=> '571-3448 Ipsum. St.',
                'city_id'=> 4,
                'phone'=> '451-067-8082',
                'code'=> '1688',
                'type_id'=> 3,
                'price'=> '$9,426'
            ],
            [
                'direction'=> '626-4183 Eros. Road',
                'city_id'=> 4,
                'phone'=> '818-932-2502',
                'code'=> '3977',
                'type_id'=> 1,
                'price'=> '$82,655'
            ],
            [
                'direction'=> 'Ap #500-446 Accumsan Ave',
                'city_id'=> 2,
                'phone'=> '453-561-4737',
                'code'=> '3773',
                'type_id'=> 3,
                'price'=> '$29,354'
            ],
            [
                'direction'=> '3703 Quisque Rd.',
                'city_id'=> 5,
                'phone'=> '020-821-1050',
                'code'=> '54983',
                'type_id'=> 1,
                'price'=> '$96,267'
            ],
            [
                'direction'=> '5946 Consectetuer St.',
                'city_id'=> 4,
                'phone'=> '773-538-6408',
                'code'=> 'Q28 3PO',
                'type_id'=> 2,
                'price'=> '$61,691'
            ],
            [
                'direction'=> 'P.O. Box 556, 1951 Vulputate Av.',
                'city_id'=> 1,
                'phone'=> '670-572-1780',
                'code'=> '4484KP',
                'type_id'=> 2,
                'price'=> '$95,859'
            ],
            [
                'direction'=> '727-198 A Road',
                'city_id'=> 1,
                'phone'=> '821-444-9824',
                'code'=> '5962',
                'type_id'=> 1,
                'price'=> '$82,504'
            ],
            [
                'direction'=> 'Ap #271-6835 Tempus St.',
                'city_id'=> 6,
                'phone'=> '601-485-1049',
                'code'=> '703157',
                'type_id'=> 2,
                'price'=> '$80,965'
            ],
            [
                'direction'=> 'P.O. Box 519, 981 Nostra, Avenue',
                'city_id'=> 3,
                'phone'=> '440-469-6769',
                'code'=> '61790-368',
                'type_id'=> 3,
                'price'=> '$49,957'
            ],
            [
                'direction'=> '2759 Faucibus St.',
                'city_id'=> 6,
                'phone'=> '510-056-8508',
                'code'=> '612383',
                'type_id'=> 2,
                'price'=> '$23,498'
            ],
            [
                'direction'=> '5720 Urna, Street',
                'city_id'=> 3,
                'phone'=> '581-094-0717',
                'code'=> 'X45 0FA',
                'type_id'=> 3,
                'price'=> '$8,187'
            ],
            [
                'direction'=> '283-1453 Amet, Avenue',
                'city_id'=> 2,
                'phone'=> '751-107-3929',
                'code'=> 'R1B 4Y7',
                'type_id'=> 1,
                'price'=> '$32,660'
            ],
            [
                'direction'=> 'P.O. Box 169, 7235 Quisque Road',
                'city_id'=> 2,
                'phone'=> '782-078-8565',
                'code'=> '86541',
                'type_id'=> 2,
                'price'=> '$39,721'
            ],
            [
                'direction'=> '6840 Rhoncus. Ave',
                'city_id'=> 3,
                'phone'=> '845-500-3131',
                'code'=> '7112',
                'type_id'=> 3,
                'price'=> '$97,135'
            ],
            [
                'direction'=> '967-7675 A, Rd.',
                'city_id'=> 2,
                'phone'=> '751-125-7876',
                'code'=> '34981',
                'type_id'=> 1,
                'price'=> '$6,672'
            ],
            [
                'direction'=> '227-6771 Ut Street',
                'city_id'=> 1,
                'phone'=> '262-186-7762',
                'code'=> '7131',
                'type_id'=> 3,
                'price'=> '$17,160'
            ],
            [
                'direction'=> 'P.O. Box 432, 4652 Proin Ave',
                'city_id'=> 6,
                'phone'=> '113-637-2816',
                'code'=> '598072',
                'type_id'=> 2,
                'price'=> '$42,804'
            ]
        ]);
    }
}
