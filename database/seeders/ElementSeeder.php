<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElementSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    DB::table('elements')->insert([
      [
        "name" => "10.1″ панель оператора Weintek (CODESYS, MQTT, OPC UA)",
        "article" => "Weintek cMT2108X2",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "15″ панель оператора Weintek (CODESYS, MQTT,OPC UA,IPS)",
        "article" => "Weintek cMT3152X",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "1-конт. реле, 24VDC, ток 6А",
        "article" => "KIPPRIBOR SR-203.D",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "2-конт. реле, 220VAC, ток 5А",
        "article" => "KIPPRIBOR MR-207.A",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "2-конт. реле, 24VDC, ток 5А",
        "article" => "KIPPRIBOR MR-203.D",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "3-ярусная колодка с винтовыми клеммами для 1-конт. реле SR, белая",
        "article" => "KIPPRIBOR PYF-011BE/3.24DC.24DC",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "3-ярусная колодка с винтовыми клеммами для 2-конт. реле MR, черная",
        "article" => "KIPPRIBOR PYF-022BE/3",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "3-ярусная колодка с винтовыми клеммами для 4-конт. реле серии RP, черная",
        "article" => "KIPPRIBOR PYF-044BE/3",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "4-конт. реле, 220VAC, ток 5А, LED-индикатор",
        "article" => "KIPPRIBOR RP-407.AL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "4-конт. реле, 24VDC, ток 5А, LED-индикатор",
        "article" => "KIPPRIBOR RP-403.DL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "4-уровневый сигнализатор жидкости на DIN рейку",
        "article" => "ОВЕН БКК1-220",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "8-портовая USB HDMI 17.3 широкоэкранная LCD KVM консоль, Разрешение: 1920 x 1080 при 60 Гц, в комплекте 8* HDMI+USB-кабель 1,8 м",
        "article" => "KVM-LCD-1708D-HR",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Broadcom/LSI CVM02 RETAIL CacheVault Accessory kit for 1Gb series SAS9361, 9380, 1Gb (05-25444-00/LSI00418/LSICVM02)",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "CODESYS (карта активации/лицензия) - программный комплекс для панелей Weintek",
        "article" => "Weintek карта активации",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "DDR4-3200MHz 8GB Kingston KSM32RS8/8HDR ECC REG CL22, SRx8, 1.2V (PC-25600)",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "DIN-рейка 35х7,5 мм",
        "article" => "DKC 02140-RET10",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "DIN-рейка 35х7,5 мм длиной 1000 мм",
        "article" => "DKC 02140-RET10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Exegate Серверный корпус Pro 1U660-HS04 RM 19, 1U, гл.660, БП 600ADS, 4xHotSwap, USB",
        "article" => "EX265523RUS",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Intel Xeon E-2314 4 Cores, 4 Threads, 2.8/4.5GHz, 8M, DDR4-3200, 65W OEM",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Intel Xeon E-2374G 4 Cores, 8 Threads, 3.7/5GHz, 8M, DDR4-3200, Graphics, 80W OEM",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Intel Xeon Scalable 6238 Gold 22 Core 2,1 G 30,25m 140W",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Kingston DDR4 3200 DIMM Server Premier Server Memory KSM32ED8/16HD ECC, Unbuffered, CL22, KSM32ED8/16HD 1.2V, 2Rx8 Hynix D, RT",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Kingston DDR4 3200 DIMM Server Premier Server Memory KSM32ED8/16HD ECC, Unbuffered, CL22, KSM32ED8/16HD 1.2V, 2Rx8 Hynix D, RTL",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "MB Supermicro X12STL-F-B",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "MB Supermicro X12STL-F-B (microATX, 1xLGA1200, supp Xeon-E 2300 95W, 4 UDIMM, Intel C252, 2x1GbE Intel210,1 PCIe 4.0 x8 (in x16 slot), 1 PCIe 4.0 x8, 1 PCIe 4.0 x4 (in x8 slot), 1 PCIe 3.0 x2 (in x4 slot), 1xM.2 PCIe 3.0 x4 2280/22110)",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "MCP-220-00043-0N",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Micron 5400PRO 7.68TB SATA 2.5 3D TLC R540/W520MB/s MTTF 3М 95000/10500 IOPS 0.6 DWPD SSD Enterprise Solid State Drive, 1 year, OEM",
        "article" => "MTFDDAK7T6TGA-1BC1ZABYY",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "NEOMAX Шнур коммут. UTP 2 м, cat.5е, серый, многожильный",
        "article" => "NM13001-020",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Samsung DDR4 32GB RDIMM (PC4-25600) 3200MHz ECC Reg Dual Rank 1.2V",
        "article" => "M393A2K43FB3-CWE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Samsung Enterprise SSD, 2.5(SFF), SM883, 240GB, SATA, 6Gb/s, R540/W480Mb/s, IOPS(R4K) 97K/22K, MLC, MTBF 2M, 3DWPD/5Y, OEM",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "SNMP карта удаленного управления для ИБП Сайбер Электро",
        "article" => "PMCARD",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Supermicro CBL-SAST-0531 Internal Mini-SAS HD to Mini-SAS HD 80cm,30AWG,12Gb/s, HF,RoHS/REACH,PBF",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Supermicro SuperServer 1U 6019P-MTR noCPU(2)2nd Gen Xeon Scalable/TDP 70-140W/ no DIMM(8)/ SATARAID HDD(4)LFF/ 2xGbE/1xFH, M2/ 2x800W",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "VPN-маршрутизатор с портами 10 Гбит/с",
        "article" => "TP-LINK ER8411",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Wi-Fi роутер MikroTik hAP ac lite TC",
        "article" => "MIKROTIK RB952UI-5AC2ND-TC",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-32 0,16-0,25А EKF PROxima",
        "article" => "EKF apd2-0.16-0.25",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-32 1,0-1,6А EKF PROxima",
        "article" => "EKF apd2-1.0-1.6",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-32 13-18А EKF PROxima",
        "article" => "EKF apd2-13-18",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-32 2,5-4А EKF PROxima",
        "article" => "EKF apd2-2.5-4.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-32 24-32А EKF PROxima",
        "article" => "EKF apd2-24-32",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-32 6-10А EKF PROxima",
        "article" => "EKF apd2-6-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автомат пуска двигателя АПД-80 25-40А EKF PROxima",
        "article" => "EKF apd3-25-40",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель 3P 100А (C) 10kA ВА 47-100 EKF PROxima",
        "article" => "EKF mcb47100-3-100C-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель 3P 6А (C) 4,5kA ВА 47-63 EKF PROxima",
        "article" => "EKF mcb4763-3-06C-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель 3P 80А (D) 10kA ВА 47-100 EKF PROxima",
        "article" => "EKF mcb47100-3-80D-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель AV-6 2P 6A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-2-06C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель ВА47-29 1Р 2А 4,5кА С IEK",
        "article" => "IEK MVA20-1-002-C",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель ВА47-29 1Р 6А 4,5кА С IEK",
        "article" => "IEK MVA20-1-006-C",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Автоматический выключатель ВА47-29 3Р 10А 4,5кА С IEK",
        "article" => "IEK MVA20-3-010-C",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "АККУМУЛЯТОР 12В, 17АЧ",
        "article" => "SKAT I-BATTERY 12-17 LIFEPO4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "АККУМУЛЯТОР ГЕРМЕТИЧНЫЙ СВИНЦОВО-КИСЛОТНЫЙ 100АЧ",
        "article" => "TEPLOCOM 100АЧ",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Аккумулятор литий-железо-фосфатный 12 В, 17 Ач",
        "article" => "SKAT I-BATTERY 12-17 LIFEPO4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Аккумулятор литий-железо-фосфатный 12 В, 7 Ач",
        "article" => "SKAT I-BATTERY 12-7 LIFEPO3",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок освещения",
        "article" => "TLK-LAMP-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Блок перемычек на 10 контактов, 2.5 мм² (уп. 10 шт.)",
        "article" => "MEYERTEC MTS-J1025",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок перемычек на 3 контакта, 2.5 мм2",
        "article" => "MTU-J325",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок питания 10Вт, 220/24, 0.4А",
        "article" => "БАТ ПТК ЕКС",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок питания 30Вт, 24В",
        "article" => "ОВЕН БП30Б-Д3-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок питания, 24В, 10А, 240Вт",
        "article" => "Mean Well SDR-240-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Блок питания, 24В, 10А, 240Вт",
        "article" => "Mean Well SDR-240-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  12
      ],
      [
        "name" => "Блок питания, 24В, 5А, 120Вт",
        "article" => "Mean Well SDR-120-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  12
      ],
      [
        "name" => "Блок питания, 24В,1.5А,36Вт",
        "article" => "Mean Well HDR-30-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Блок питания, 24В,2.5А,60Вт",
        "article" => "Mean Well HDR-60-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Блок питания, 24В,3.83А,92Вт",
        "article" => "Mean Well HDR-100-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Блок питания, 24В,5А,120Вт",
        "article" => "Mean Well SDR-120-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Блок расширения аналоговых сигналов входных 8 - аналоговых входа 4…20 mA",
        "article" => "ПТК ЕКС БАВ-v3-8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения аналоговых сигналов входных AI16 (4..20мА)",
        "article" => "УМНОГОР ПТК ГПП БАВ-16.0.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения аналоговых сигналов входных AI8 (4..20мА)",
        "article" => "УМНОГОР ПТК ГПП БАВ-8.0.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых аналоговых сигналов входных",
        "article" => "ПТК ГПП БАВ-8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов входных, 16 - дискретных входов",
        "article" => "ПТК ЕКС БДВ-16",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов входных, 16 - дискретных входов",
        "article" => "ПТК ЕКС БДВ-v3-16",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов входных, DI16",
        "article" => "УМНОГОР ПТК ГПП БДВ-16",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов входных, DI8",
        "article" => "УМНОГОР ПТК ГПП БДВ-8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, 16 - дискретных выходов",
        "article" => "ПТК ЕКС БУП-16.0-0.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, 16 - дискретных выходов",
        "article" => "ПТК ЕКС БУПД-v3-16",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, DO16",
        "article" => "УМНОГОР ПТК ГПП БУП-16.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, DO16",
        "article" => "УМНОГОР ПТК ГПП БУП-16.0-0.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, DO8",
        "article" => "УМНОГОР ПТК ГПП БУП-8.0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Блок резервирования питания, вход: 19-29 VDC выход: 24VDC,20Aв",
        "article" => "Mean Well DR-DN20",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Блок резервирования питания, вход: 19-29 VDC выход: 24VDC,20Aв",
        "article" => "Mean Well DR-DN20",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  12
      ],
      [
        "name" => "Блок розеток 8 позиций, 16А",
        "article" => "TLK-RPI-MN-A08-M21-W-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Блок розеток 9 позиций, 10А",
        "article" => "БР-9П-Ш-9005",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок-контакт АПД-32 БК-11 NO+NC",
        "article" => "EKF apd2-bk11",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок-контакт, 1NC",
        "article" => "MEYERTEC MTB2-BE12",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок-контакт, 1NO",
        "article" => "MEYERTEC MTB2-BE11",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Бокс пластиковый с монтажной платой 400х300х220 мм IP65",
        "article" => "EKF PB65MP004",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Бокс пластиковый с монтажной платой 500х400х240 мм IP65",
        "article" => "EKF PB65MP007",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентилятоор 230VAC, производительность 269 м3/ч, габаритный размер: 255х255х115 мм",
        "article" => "KIPPRIBOR KIPVENT-400.01.230",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентилятор 230VAC, производительность 111 м3/ч, габаритный размер: 204х204х103 мм",
        "article" => "KIPPRIBOR KIPVENT-300.01.230",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентилятор 230VAC, производительность 42 м3/ч, габаритный размер: 121х121х60,5 мм",
        "article" => "KIPPRIBOR KIPVENT-100.01.230",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентилятор 230VAC, производительность 580 м3/ч, габаритный размер: 322х322х130 мм",
        "article" => "KIPPRIBOR KIPVENT-500.01.230",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентилятор 230VAC, производительность 88 м3/ч, габаритный размер: 148,5х148,5х73,5 мм",
        "article" => "KIPPRIBOR KIPVENT-200.01.230",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентилятор с фильтром универсальный ВФУ 170/139 м3/час 230В 45Вт IP54",
        "article" => "TDM SQ0832-0112",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Вентиляторный модульный с 3 вентиляторами",
        "article" => "R-FAN-3T-9005",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентиляторный модульный с 6 вентиляторами",
        "article" => "TLK-FAN6-F-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Вентиляционная решетка 116,5х116,5х22 мм, поверхностная плотность фильтра 150 г/м2",
        "article" => "KIPPRIBOR KIPVENT-100.01.300",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентиляционная решетка 150х150х24 мм, поверхностная плотность фильтра 150 г/м2",
        "article" => "KIPPRIBOR KIPVENT-200.01.300",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентиляционная решетка 204х204х30 мм, поверхностная плотность фильтра 150 г/м2",
        "article" => "KIPPRIBOR KIPVENT-300.01.300",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентиляционная решетка 255х255х30 мм, поверхностная плотность фильтра 150 г/м2",
        "article" => "KIPPRIBOR KIPVENT-400.01.300",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентиляционная решетка 320х320х30 мм, поверхностная плотность фильтра 150 г/м2",
        "article" => "KIPPRIBOR KIPVENT-500.01.300",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Вентиляционная решетка с фильтром для вентилятора ВФУ",
        "article" => "TDM SQ0832-0117",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Вилка угловая каучуковая с кольцом 230В 2P+PE 16A IP44 EKF Марс",
        "article" => "EKF RPS-017-16-230-44",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Витая пара, экранированный",
        "article" => "ParLan F/UTP Cat5e 2х2х0.52 PVC",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Внешний батарейный блок Сайбер Электро для моделей ЭКСПЕРТ-6000Р/ ЭКСПЕРТ-10000Р (12V / 9Ah х 16)",
        "article" => "ВББ192В75А",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Внешний блок питания",
        "article" => "Входит в комплект поставки «Сокол-М1»",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Внешний цифровой двухстрочный пульт PBC00001",
        "article" => "VEDA PBC00001",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  15
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 1A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-01C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 1A (D) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-01D-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 2A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-02C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 32A (C) 6kA EKF AVERES",
        "article" => "mcb6-1-32C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 4A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-04C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 4A (D) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-04D-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 6A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-06C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 1P 6A (D) 6kA EKF AVERES",
        "article" => "EKF mcb6-1-06D-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 2P 10A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-2-10C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 2P 16A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-2-16C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 2P 4A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-2-04C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 2P 6A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-2-06C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 3P 10A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-3-10C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 3P 20A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-3-20C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 3P 25A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-3-25C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 3P 32A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-3-32C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический AV-6 3P 6A (C) 6kA EKF AVERES",
        "article" => "EKF mcb6-3-6C-av",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический ВА-99М 630/500А 3P 50кА EKF PROxima",
        "article" => "EKF mccb99-630-500m",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель автоматический ВА-99М 630/630А 3P 50кА EKF PROxima",
        "article" => "EKF mccb99-630-630m",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель концевой, IP54, рычаг с роликом",
        "article" => "MEYERTEC MTB4-MS7126",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки 2P 16А ВН-63 EKF PROxima",
        "article" => "EKF SL63-2-16-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки 2P 25А ВН-63",
        "article" => "EKF SL63-2-25-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки 2P 25А ВН-63 EKF PROxima",
        "article" => "EKF SL63-2-25-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки 2P 32А ВН-63",
        "article" => "EKF SL63-2-32-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки 2P 32А ВН-63 EKF PROxima",
        "article" => "EKF SL63-2-32-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки 3P 16А ВН-63 EKF PROxima",
        "article" => "EKF S63316",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Выключатель нагрузки ВН-99 125/100А 3P EKF PROxima",
        "article" => "EKF sl99-125-100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Газоанализаторы стационарные Хоббит-Т, исполнение «И21» 4CH4-4H2S",
        "article" => "Хоббит-Т-4CH4-4H2S-И21(г)-/65:T/50-Д2T1Ц2-C111~220",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Газоанализаторы стационарные Хоббит-Т, исполнение «И21» O2-CH4-CO-H2S-NH3",
        "article" => "Хоббит-Т-O2-CH4-CO-H2S-NH3-И21(г)-/65:T/50-Д2T1Ц2-C111~220",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Гайка М6 шестигранная оцинкованная DIN934",
        "article" => "Tech-KREP 00005604",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Гильзы Partex PTC с закрытым профилем для маркировки провода и кабеля 0,40-1,50 мм2 15,00*4,60 (200 шт)",
        "article" => "Partex PTC-10015",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  16
      ],
      [
        "name" => "Гильзы Partex PTC с закрытым профилем для маркировки провода и кабеля 1,50-3,00 мм2 15,00*4,60 (200 шт)",
        "article" => "Partex PTC-20015",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  16
      ],
      [
        "name" => "Датчик влажности и температуры, настенный; вл (0...100%), 4-20 мА; тем-ра (0...50 С), 4-20 мА; 12...30 VDC",
        "article" => "Galltec+Mela LWK3.00.F105.C07.001",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  17
      ],
      [
        "name" => "Датчик влажности-температуры для системы мониторинга",
        "article" => "TLK-HUM-RSC",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Датчик движения для системы мониторинга",
        "article" => "TLK-RSC TLK-MOTION-RSC",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Датчик затопления для системы мониторинга",
        "article" => "TLK-RSC TLK-FLOOD-RSC",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Держатель этикетки (уп 10 шт)",
        "article" => "MEYERTEC MTU-S2",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Держатель этикетки (уп. 10 шт.)",
        "article" => "MEYERTEC MTU-S2",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Джек RJ-45 8P8C CAT 5e (etm05-1021)",
        "article" => "REXANT etm05-1021",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Дифференциальный автомат АД-32 1P+N 6А/30мА (хар. C, AC, электронный, защита 270В) 4,5кА",
        "article" => "EKF DA32-06-30-pro",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Жесткий диск  2.4Tb SAS",
        "article" => "AL15SEB24EQ, 4 ЗИП",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка для двухуровневых клемм, 2.5 мм² (уп. 20 шт.)",
        "article" => "MEYERTEC MTS-PD2.5",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка для клемм с держателем предохранителя, 2.5 мм² (уп. 20 шт.)",
        "article" => "MEYERTEC MTS-PF",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка для одноуровневых винтовых клемм, серая (уп. 20 шт.)",
        "article" => "MEYERTEC MTU-P",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка для четырехпроводных клемм, 2.5 мм² (уп. 20 шт.)",
        "article" => "MEYERTEC MTS-PFO2.5",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка клемм (20шт)",
        "article" => "MEYERTEC MTU-P",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка проема вентиляторного блока, Перфорированная, черная",
        "article" => "TLK-BLNK-FAN-P-I-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Заглушка торцевая 2.5 мм², серая (уп. 20 шт.)",
        "article" => "MEYERTEC MTS-P2.5",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка торцевая 4 мм², серая (уп 20 шт)",
        "article" => "MEYERTEC MTS-P4",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка торцевая 4 мм², серая (уп. 20 шт.)",
        "article" => "MEYERTEC MTS-P4",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заглушка фронтальная 19, 1U, черная",
        "article" => "TLK-BLNK-1-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Заглушка фронтальная 19, 2U, черная",
        "article" => "TLK-BLNK-2-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Заглушка фронтальная 19, 3U, черная",
        "article" => "TLK-BLNK-3-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG11, д.5 - 10мм, М=18,5",
        "article" => "DKC 52700",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG13.5, д.6 - 12мм, М=20,5",
        "article" => "DKC 52800",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG16, д.9 - 14мм",
        "article" => "DKC 52900",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG16, д.9 - 14мм, М=22,5",
        "article" => "DKC 52900",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG21, д.13 - 18мм, М=28,5",
        "article" => "DKC 53000",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG29, д.15 - 25мм, М=37",
        "article" => "DKC 53100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим кабельный с контргайкой, IP68, PG36, д.20 - 31мм, М=47",
        "article" => "DKC 53200",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Зажим под проводник для совместного подключения с шиной PIN под боковое соединение",
        "article" => "EKF ck-s",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Заклепка резьбовая стальная цилиндрическая с насечкой (50 шт; М5; стандартный борт)",
        "article" => "MESSER 211105S-50",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Заклепка резьбовая стальная цилиндрическая с насечкой (50 шт; М6; стандартный борт)",
        "article" => "MESSER 211106S-50",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Защитный кожух для кнопок с крышкой для пломбировки",
        "article" => "EKF scep-1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Защитный кожух для кнопок с крышкой для пломбировки EKF PROxima",
        "article" => "scep-1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ИБП 220 В, 800 ВА (500 Вт)",
        "article" => "SKAT-UPS 800/500 DIN",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ИБП ДЛЯ КОТЛА ОТОПЛЕНИЯ 220 В, 800 ВА (500 Вт)",
        "article" => "TEPLOCOM SOLAR-800",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ИБП Сайбер Электро",
        "article" => "ЭКСПЕРТ-6000Р Rack",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Извещатель пожарный дымовой для системы мониторинга",
        "article" => "TLK-RSC TLK-SMOKE-RSC-1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Изолированный 8-канальный концентратор RS485",
        "article" => "RS485-HUB-8P",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Изолятор SM25 (М6) силовой с болтом",
        "article" => "IEK YIS11-25-06-B",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Изолятор шинный 900А 18кВ Лесенка EKF PROxima",
        "article" => "EKF plc-sl-900",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Индикатор двухцветный, 24V AC/DC",
        "article" => "MEYERTEC MT22-WD24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Источник бесперебойного питания 500 ВА / 300 Вт",
        "article" => "SKAT-UPS 500/300 DIN",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Источник бесперебойного питания 800 ВА / 500 Вт",
        "article" => "SKAT-UPS 800/500 DIN",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Источник бесперебойного питания 800 ВА / 500 Вт, Крепление на DIN-рейку",
        "article" => "SKAT-UPS 800/500 DIN",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ИСТОЧНИК БЕСПЕРЕБОЙНОГО ПИТАНИЯ RAPAN-UPS 1000",
        "article" => "RAPAN-UPS 1000-RACK-IN-2X9-E",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ИСТОЧНИК БЕСПЕРЕБОЙНОГО ПИТАНИЯ RAPAN-UPS 600",
        "article" => "RAPAN-UPS 600",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кабель SFF8643-SATASB-1M, INT SFF8643-to-4*SATA",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кабель, INT SFF8643-to-4*SATA",
        "article" => "SFF8643-SATASB-1M",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кабельный органайзер",
        "article" => "TLK-OV650C-2-42U-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Карман для документации, пластиковый, 222x230x30 мм",
        "article" => "DKC R5A32",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма PE 2.5 мм2",
        "article" => "MEYERTEC MTU-2.5PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма PE 6 мм2",
        "article" => "MEYERTEC MTU-6PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая «Земля», 10 мм²",
        "article" => "MEYERTEC MTU-10PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая «Земля», 2.5 мм2",
        "article" => "MTU-2.5PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая «Земля», 4 мм²",
        "article" => "MEYERTEC MTU-4PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая «Земля», 6 мм2",
        "article" => "MTU-6PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая «Земля», 6 мм²",
        "article" => "MEYERTEC MTU-6PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 10 мм², серая",
        "article" => "MEYERTEC MTU-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 2,5 мм2, серая",
        "article" => "MTU-2.5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 2.5 мм2 синяя",
        "article" => "MTU-2.5BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 2.5 мм2, серая",
        "article" => "MTU-2.5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 4 мм², серая",
        "article" => "MEYERTEC MTU-4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 4 мм², синяя",
        "article" => "MEYERTEC MTU-4BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 6 мм2 синяя",
        "article" => "MTU-6BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 6 мм2, серая",
        "article" => "MTU-6",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 6 мм², серая",
        "article" => "MEYERTEC MTU-6",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма винтовая проходная, 6 мм², синяя",
        "article" => "MEYERTEC MTU-6BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная «Земля», 2.5 мм²",
        "article" => "MEYERTEC MTS-2.5PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная «Земля», 4 мм²",
        "article" => "MEYERTEC MTS-4PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная «Земля», 6 мм²",
        "article" => "MEYERTEC MTU-6PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная двухуровневая, 2.5 мм², серая",
        "article" => "MEYERTEC MTS-D2.5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 2.5 мм², желто-зеленая",
        "article" => "MEYERTEC MTS-2.5PE",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 2.5 мм², серая",
        "article" => "MEYERTEC MTS-2.5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 2.5 мм², синяя",
        "article" => "MEYERTEC MTS-2.5BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 4 мм², серая",
        "article" => "MEYERTEC MTS-4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 4 мм², синяя",
        "article" => "MEYERTEC MTS-4BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 6 мм², серая",
        "article" => "MEYERTEC MTU-6",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная проходная, 6 мм², синяя",
        "article" => "MEYERTEC MTU-6BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная с держателем предохранителя, 2.5 мм²",
        "article" => "MEYERTEC MTS-2.5F",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пружинная четырехпроводная, 2.5 мм², серая",
        "article" => "MEYERTEC MTS-FO2.5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма пятиполюсная КСВ 2.5-35 (3P+N+PE) EKF PROxima",
        "article" => "EKF kvs5-2.5-35",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма серая 2.5 мм2",
        "article" => "MEYERTEC MTU-2.5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма серая 6 мм2",
        "article" => "MEYERTEC MTU-6",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма силовая вводная двойная КСВ 16-50 серая EKF PROxima",
        "article" => "EKF plc-kvs2-16-50-grey",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма силовая вводная КСВ 16-50 желто-зеленая EKF PROxima",
        "article" => "EKF plc-kvs-16-50-y-green",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма синяя 2.5 мм2",
        "article" => "MEYERTEC MTU-2.5BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клемма синяя 6 мм2",
        "article" => "MEYERTEC MTU-6BL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Клеммный держатель для плавкой вставки, с индикацией на 220VAC",
        "article" => "ZHF910MGR",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка грибовидная, возврат поворотом, 1NC красный 40 мм",
        "article" => "MEYERTEC MTB2-BSZ1254",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка двойная 1NO+1NC, плоский толкатель",
        "article" => "MEYERTEC MTB2-BLZ1583",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка плоская двойная, 1NC+1NO, металл",
        "article" => "MEYERTEC MTB2-BLZ1583",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка плоская двойная, маркировка «I», 1NO, металл",
        "article" => "MEYERTEC MTB2-BLZ1583",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка плоская зеленая, маркировка «I», 1NO, металл",
        "article" => "MEYERTEC MTB2-BAZ11331",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка плоская черная, 1NO, металл",
        "article" => "MEYERTEC MTB2-BAZ112",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка плоская, маркировка «stop», 1NC, металл",
        "article" => "MEYERTEC MTB2-BAZ12434",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка с подсветкой желтая 24V 1NO",
        "article" => "MEYERTEC MTB2-BW3561",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кнопка с подсветкой зеленая 24V 1NO",
        "article" => "MEYERTEC MTB2-BW3361",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Коммутатор TP-LINK TL-SG108",
        "article" => "TP-LINK TL-SG108",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Коммутатор TP-LINK TL-SG116",
        "article" => "TP-LINK TL-SG116",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Коммутатор TP-LINK неуправляемый с 24 портами 100 Мбит/с",
        "article" => "TP-LINK tl-sf1024d",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Коммутатор с 24 гигабитными портами для размещения в стойке",
        "article" => "TP-LINK TL-SG1024",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Коммутатор, неуправляемый",
        "article" => "TP-LINK TL-SG116",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Коммутатор, управляемый",
        "article" => "ZYXEL GS1900-24E-EU0103F",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект держателей (5 шт в уп)",
        "article" => "MEYERTEC MTB2-F10",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект держателей (5 шт в упаковке)",
        "article" => "MEYERTEC MTB2-F10",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект панелей цоколя, Ш/Г=1000 мм, В=100 мм, 1 кмп = 2 шт.",
        "article" => "DKC R5FP100",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект панелей цоколя, Ш/Г=1200 мм, В=100 мм, 1 кмп = 2 шт.",
        "article" => "DKC R5FP120",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект панелей цоколя, Ш/Г=400 мм, В=100мм, 1 кмп = 2 шт.",
        "article" => "DKC R5FP40",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект панелей цоколя, Ш/Г=600 мм, В=100мм, 1 кмп = 2 шт.",
        "article" => "DKC R5FP60",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект панелей цоколя, Ш/Г=800 мм, В=100мм, 1 кмп = 2 шт.",
        "article" => "DKC R5FP80",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект угловых элементов с пластиковыми заглушками, В =100 мм, 1 кмп =4 шт.",
        "article" => "DKC R5BP01",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Комплект шкафа CQE, с дверью и задней панелью, 1800 x 1000 x 400 мм",
        "article" => "R5CQE18104",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Комплект шкафа CQE, с дверью и задней панелью, 1800 x 800 x 400 мм",
        "article" => "R5CQE1884",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Комплект шкафа CQE, с дверью и задней панелью, 2000 x 1000 x 400 мм",
        "article" => "R5CQE20104",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "КОНСОЛЬ 1U, 19 TFT, 16 ПОРТОВ, МОН, ТАЧПАД, КАБЕЛИ 16ШТ, NEGORACK",
        "article" => "NR-MSR2916UDL",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контакт боковой дополнительный КБМ-20 2NO для КМ EKF PROxima",
        "article" => "EKF km-cs-20",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор 4-x полюсный OptiDin MK-100-2522-230AC, 2NO, 2NC",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КМИ-10910 9А 230В/АС3 1НО",
        "article" => "IEK KKM11-009-230-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КМИ-11210 12А 230В/АС3 1НО",
        "article" => "IEK KKM11-012-230-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КМИ-11810 18А 230В/АС3 1НО IEK",
        "article" => "IEK KKM11-018-230-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КМИ-23210 32А 230В/АС3 1НО",
        "article" => "IEK KKM21-032-230-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КМИ-34012 40А 230В/АС3 1НО1НЗ",
        "article" => "IEK KKM31-040-230-11",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КМИ-46512 65А 230В/АС3 1НО;1НЗ",
        "article" => "IEK KKM41-065-230-11",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор КТИ-6400 400А 230В/АС3 1НО",
        "article" => "IEK KKT60-400-230-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контактор модульный КМ РУ 16А 2NO (1 мод.) EKF PROxima",
        "article" => "EKF km-1m-16-20",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контроллер Adaptec ASR-8405 SGL RAID 0/1/1E/10/5/6/50/60 4i-ports 1Gb",
        "article" => "2277600-R",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контроллер Adaptec ASR-8405 SGL RAID 0/1/1E/10/5/6/50/60 4i-ports 1Gb (2277600-R)",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Контроллер LSI 9361-8I 12Gb/s RAID 0/1/10/5/6/50/60 8i-ports 1Gb (LSI00417/ 05-25420-08)",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Концевая крышка для клемм",
        "article" => "MTU-P",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Концевой держатель",
        "article" => "MTU-S1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 25x40",
        "article" => "DKC 01163RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 25x40 по 2м",
        "article" => "DKC 01163RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 25x60",
        "article" => "DKC 01166RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 40x40",
        "article" => "DKC 01134RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 40x60",
        "article" => "DKC 01107RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 40x60 по 2м",
        "article" => "DKC 01107RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 60x60",
        "article" => "DKC 01108RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный RL6 80x60",
        "article" => "DKC 01139RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный, серый RL6 40x80",
        "article" => "DKC 01127RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Короб перфорированный, серый RL6 60x80",
        "article" => "DKC 01128RL",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус пластиковый, 1 место, серый",
        "article" => "MEYERTEC MTB2-PE1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 1000*800*300мм (В*Ш*Г)",
        "article" => "DKC R5ST1083",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 1000*800*300мм (В*Ш*Г)",
        "article" => "YNR 800х1000х300",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 1200*800*300мм (В*Ш*Г)",
        "article" => "DKC R5ST1283",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 1400*800*300мм (В*Ш*Г)",
        "article" => "DKC R5ST1483",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 400*400*200мм (В*Ш*Г)",
        "article" => "DKC R5ST0442",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 500*400*250мм (В*Ш*Г)",
        "article" => "DKC R5ST0549",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 600*500*200мм (В*Ш*Г)",
        "article" => "DKC R5ST0652",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 800*600*250мм (В*Ш*Г)",
        "article" => "DKC R5ST0869",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Корпус сварной навесной серии ST с М/П размер 800*600*300мм (В*Ш*Г)",
        "article" => "DKC R5ST0863",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Крепежный комплект «винт - шайба - гайка», для крепления оборудования",
        "article" => "TLK-FPFP-50",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Кронштейн наклонный для din-рейки",
        "article" => "TDM КНД-30",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кулер для процессора",
        "article" => "ID-Cooling IS-30",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Кулер для процессора ID-Cooling IS-30",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Лента неклеевая пластиковая для кабельных контейнеров (тип WKM/FB, PT, PTC, PM-10, PTM) 4,6мм*5м, белая",
        "article" => "Partex 3476A035",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  16
      ],
      [
        "name" => "Лента спиральная монтажная SWB-06 D6мм d4мм (10м.)",
        "article" => "EKF plc-swb-06",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Лента спиральная монтажная SWB-15 D=15мм/d=12мм (10м)",
        "article" => "EKF plc-swb-15",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Лента спиральная монтажная SWB-24 D24мм d21мм (10м.)",
        "article" => "EKF plc-swb-24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Линейный светодиодный светильник 12Вт 4000K, 872мм",
        "article" => "ЭРА LLED-01-12W-4000-W",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Линейный светодиодный светильник 4Вт 4000К, 311 мм",
        "article" => "ЭРА LLED-01-04W-4000-W",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ - (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ - (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ «0» (500шт в уп)",
        "article" => "Klemsan 517000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «0» (500шт в уп) 2.5 кв",
        "article" => "Klemsan 518000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «0» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «0» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «0» (500шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «1» (500шт в уп)",
        "article" => "Klemsan 517001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «1» (500шт в уп) 2.5 кв",
        "article" => "Klemsan 518001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «1» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «1» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «1» (500шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «2» (500шт в уп)",
        "article" => "Klemsan 517002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «2» (500шт в уп) 2.5 кв",
        "article" => "Klemsan 518002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «2» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «2» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «2» (500шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «3» (500шт в уп)",
        "article" => "Klemsan 517003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «3» (500шт в уп) 2.5 кв",
        "article" => "Klemsan 518003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «3» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «3» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «3» (500шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «4» (500шт в уп)",
        "article" => "Klemsan 517004",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «4» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517004",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «4» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518004",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «4» (500шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519004",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ «5» (500шт в уп)",
        "article" => "Klemsan 517005",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «5» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517005",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «5» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518005",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «5» (500шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519005",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ «6» (500шт в уп)",
        "article" => "Klemsan 517006",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «6» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517006",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «6» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518006",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «7» (500шт в уп)",
        "article" => "Klemsan 517007",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «7» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517007",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «7» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518007",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «8» (500шт в уп)",
        "article" => "Klemsan 517008",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «8» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517008",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «8» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518008",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «9» (500шт в уп)",
        "article" => "Klemsan 517009",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «9» (500шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517009",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ «9» (500шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518009",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ . (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518047",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ + (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517043",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ B (200шт в уп)",
        "article" => "Klemsan 517011",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркер наборный на провод символ L (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ L (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ L (200шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ N (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ N (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ N (200шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркер наборный на провод символ А (200шт в уп)",
        "article" => "Klemsan 517010",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ - (200шт в уп)",
        "article" => "Klemsan 517044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ - (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ - (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ - (200шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ . (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518047",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ + (200шт в уп)",
        "article" => "Klemsan 517043",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ + (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517043",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ L (200шт в уп)",
        "article" => "Klemsan 517021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ L (200шт в уп) 2.5 кв",
        "article" => "Klemsan 518021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ L (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ L (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ L (200шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ N (200шт в уп)",
        "article" => "Klemsan 517023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ N (200шт в уп) 2.5 кв",
        "article" => "Klemsan 518023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ N (200шт в упаковке) 1.5 кв",
        "article" => "Klemsan 517023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ N (200шт в упаковке) 2.5 кв",
        "article" => "Klemsan 518023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркеры наборный на провод символ N (200шт в упаковке) 4-6 кв",
        "article" => "Klemsan 519023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка винтовых клемм, 10мм², (L1, L2, L3, N, PE) (уп. 100 шт.)",
        "article" => "MEYERTEC MTU-10ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 10мм², 1-10 (уп. 100 шт.)",
        "article" => "MEYERTEC MTU-10M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 2.5мм², 1-10 (уп 100 шт)",
        "article" => "MEYERTEC MTU-2.5M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 2.5мм2, 11-20 (уп 100 шт)",
        "article" => "MEYERTEC MTU-2.5M1120",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 4мм², (L1, L2, L3, N, PE) (уп. 100 шт.)",
        "article" => "MEYERTEC MTU-4ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 4мм², 1-10, (уп. 100 шт.)",
        "article" => "MEYERTEC MTU-4M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 6мм2, (L1, L2, L3, N, PE) (уп 100 шт)",
        "article" => "MEYERTEC MTU-6ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 6мм², (L1, L2, L3, N, PE) (уп. 100 шт.)",
        "article" => "MEYERTEC MTU-6ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 6мм², 1-10 (уп 100 шт)",
        "article" => "MEYERTEC MTU-6M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка винтовых клемм, 6мм², 1-10 (уп. 100 шт.)",
        "article" => "MEYERTEC MTU-6M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '-' (уп. 250 шт.)",
        "article" => "Klemsan 516044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «-» (уп. 250 шт.)",
        "article" => "Klemsan 516044",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «0» (уп. 250 шт.)",
        "article" => "Klemsan 516000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «1» (уп. 250 шт.)",
        "article" => "Klemsan 516001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «2» (уп. 250 шт.)",
        "article" => "Klemsan 516002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «3» (уп. 250 шт.)",
        "article" => "Klemsan 516003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «4» (уп. 250 шт.)",
        "article" => "Klemsan 516004",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «5» (уп. 250 шт.)",
        "article" => "Klemsan 516005",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «L» (уп. 250 шт.)",
        "article" => "Klemsan 516021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), «N» (уп. 250 шт.)",
        "article" => "Klemsan 516023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '0' (уп. 250 шт.)",
        "article" => "Klemsan 516000",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '1' (уп. 250 шт.)",
        "article" => "Klemsan 516001",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '2' (уп. 250 шт.)",
        "article" => "Klemsan 516002",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '3' (уп. 250 шт.)",
        "article" => "Klemsan 516003",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '4' (уп. 250 шт.)",
        "article" => "Klemsan 516004",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), '5' (уп. 250 шт.)",
        "article" => "Klemsan 516005",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), 'L' (уп. 250 шт.)",
        "article" => "Klemsan 516021",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля (кольцо) KG2 (4...16 мм.кв.), 'N' (уп. 250 шт.)",
        "article" => "Klemsan 516023",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Маркировка кабеля плоская 11x32мм, (без надписей), под стяжку; KBE 1 (упак 100 шт)",
        "article" => "Klemsan 520110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 2.5мм², 1-10 (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-2.5M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 2.5мм², 11-20 (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-2.5M1120",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 2.5мм², 21-30 (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-2.5M2130",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 2.5мм², L1, L2, L3, N, PE (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-2.5ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 4 мм², 1-10 (уп 100 шт)",
        "article" => "MEYERTEC MTS-4M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 4 мм², 1-10 (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-4M110",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 4 мм², L1, L2, L3, N, PE (уп 100 шт)",
        "article" => "MEYERTEC MTS-4ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 4 мм², L1, L2, L3, N, PE (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-4ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 4мм², L1, L2, L3, N, PE (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-4ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Маркировка пружинных клемм 6 мм², L1, L2, L3, N, PE (уп. 100 шт.)",
        "article" => "MEYERTEC MTS-6ML",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Марс 220-КУ",
        "article" => "Марс 220-КУ",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Медная шина 3х15 мм, 10 подключений, 270 мм, ток 210 А",
        "article" => "RC19 ГЗШ-3.15-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Медная шина 6х50 мм, 10 подключений, 455 мм, ток 955 А",
        "article" => "RC19 ГЗШ-6.50-10",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Межсетевой экран, черный",
        "article" => "TP-LINK ER8411",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Метизы",
        "article" => "Tech-KREP",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Модем ZTE MF79RU 2G/3G/4G, внешний, черный",
        "article" => "ZTE MF79RU",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Модуль ввода дискретный 32DI",
        "article" => "ОВЕН МВ210-212",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Модуль вывода дискретный 24DO",
        "article" => "ОВЕН МВ210-403",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Модуль индикации и защиты, 24VDC",
        "article" => "LM-CF24.G",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 1800 x 1000 мм",
        "article" => "DKC R5PCE18100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 1800 x 1000 мм",
        "article" => "R5PCE18100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 1800 x 800 мм",
        "article" => "DKC R5PCE1880",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 1800 x 800 мм",
        "article" => "R5PCE1880",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 2000 x 1000 мм",
        "article" => "R5PCE20100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 2000 x 1000мм",
        "article" => "DKC R5PCE20100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 2000 x 1200 мм",
        "article" => "DKC R5PCE20120",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 2000 x 600 мм",
        "article" => "DKC R5PCE2060",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Монтажная плата, для шкафов DAE/CQE 2000 x 800 мм",
        "article" => "DKC R5PCE2080",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Нагреватель с вентилятором, 400Вт",
        "article" => "MEYERTEC MTK-FH400",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Нагреватель щитовой, 100Вт",
        "article" => "MEYERTEC MTK-EH100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Нагреватель щитовой, 30Вт",
        "article" => "MEYERTEC MTK-EH30",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник кольцевой НКИ 1,5- 6",
        "article" => "КВТ 47475",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник кольцевой НКИ 2,5- 6",
        "article" => "КВТ 47479",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник кольцевой НКИ 2.5- 6",
        "article" => "КВТ 47479",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник кольцевой НКИ 6,0- 6",
        "article" => "КВТ 47482",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник ТМЛ 4–6–3 луженый",
        "article" => "КВТ 40827",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный двойной (100 шт в уп) НШВИ(2) 0,75-8",
        "article" => "НШВИ(2) 0,75-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный двойной (100 шт в уп) НШВИ(2) 2,5-8",
        "article" => "НШВИ(2) 2,5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 0,5-8 (50шт.)",
        "article" => "EKF nhvi-0.5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШВИ 0,75-8 (100 шт в уп)",
        "article" => "НШВИ 0,75-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 0,75-8 (50шт.)",
        "article" => "EKF nhvi-0.75-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 1,5-8 (50шт.)",
        "article" => "EKF nhvi-1.5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 10.0-12 (50шт.)",
        "article" => "EKF nhvi-10.0-12",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 16,0-12 (50шт.)",
        "article" => "EKF nhvi-16,0-12",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШВИ 2,5-8 (100 шт в уп)",
        "article" => "НШВИ 2,5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 2,5-8 (50шт)",
        "article" => "EKF nhvi-2.5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 2,5-8 (50шт.)",
        "article" => "EKF nhvi-2.5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 25,0-16 (50шт.)",
        "article" => "EKF nhvi-25.0-16",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 4,0-9 (50шт.)",
        "article" => "EKF nhvi-4.0-9",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШВИ 4-8 (100 шт в уп)",
        "article" => "НШВИ 4-12",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ 6,0-12 (50шт.)",
        "article" => "EKF nhvi-6.0-12",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 0,5-8 (50шт.)",
        "article" => "EKF nhvi2-0.5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 0,75-8 (50шт.)",
        "article" => "EKF nhvi2-0.75-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 1,5-8 (50шт.)",
        "article" => "EKF nhvi2-1.5-8",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 2,5-10 (50шт)",
        "article" => "EKF nhvi2-2.5-10",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 2,5-10 (50шт.)",
        "article" => "EKF nhvi2-2.5-10",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 4-12 (50шт.)",
        "article" => "EKF nhvi2-4.0-12",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Наконечник штыревой втулочный изолированный НШвИ(2) 6,0-14 (50шт.)",
        "article" => "EKF nhvi2-6.0-14",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Настольный коммутатор с 5 портами 100 Мбит/с",
        "article" => "TP-Link LS1005",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Настольный коммутатор с 8 гигабитными портами",
        "article" => "TP-LINK TL-SG108",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Настольный коммутатор с 8 портами 100 Мбит/с",
        "article" => "TP-Link LS1008",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Ограничитель на DIN-рейку (пластик)",
        "article" => "IEK YXD12",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Оргстекло",
        "article" => "Оргстекло 4мм ГОСТ",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые для шкафов CQE 1800 x 1000мм, 1 упаковка - 2шт.",
        "article" => "DKC R5LE18102",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые для шкафов CQE 1800 x 400мм, 1 упаковка - 2шт.",
        "article" => "DKC R5LE1842",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые для шкафов CQE 1800 x 800мм, 1 упаковка - 2шт.",
        "article" => "DKC R5LE1882",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые для шкафов CQE 2000 x 400мм, 1 уп - 2шт.",
        "article" => "DKC R5LE2042",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые для шкафов CQE 2000 x 400мм, 1 упаковка - 2шт.",
        "article" => "DKC R5LE2042",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые для шкафов CQE 2000 x 800мм, 1 упаковка - 2шт.",
        "article" => "DKC R5LE2082",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панели боковые, для шкафов CQE 1800 x 400мм, 1 упаковка - 2шт.",
        "article" => "R5LE1842",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Панели боковые, для шкафов CQE 2000 x 400мм, 1 упаковка - 2шт.",
        "article" => "R5LE2042",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  19
      ],
      [
        "name" => "Панель 19 с DIN-рейкой, 3U, черная",
        "article" => "NIKOMAX NMC-RP24UD-21U-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панель TLK",
        "article" => "TLK-EP25-3U-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Панель оператора Weintek 7″",
        "article" => "Weintek cMT2078X",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Панель осветительная",
        "article" => "R-LED-220-B",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Патч-корд круглый, U/UTP, RJ-45, кат. Cat. 5e, 0,5 м",
        "article" => "Cablexpert PP12-0.5M",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Патч-корд круглый, U/UTP, RJ-45, кат. Cat. 5e, 10 м",
        "article" => "Cablexpert PP12-10M",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Патч-корд круглый, U/UTP, RJ-45, кат. Cat. 5e, 2 м",
        "article" => "Cablexpert PP12-2M/O",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Переключатель на 3 положения, 2NO, с фиксацией, металл",
        "article" => "MEYERTEC MTB2-BDZ133",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Переключатель с ключом 3 положения 2NO, 1 выемка, с фиксацией",
        "article" => "MEYERTEC MTB2-BGZ133",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Переходник 280 мм для рукояток управления TwinBlock 80-250А EKF",
        "article" => "EKF tb-a-1-280",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Переходник 280 мм для рукояток управления рубильниками TwinBlock 80-250А",
        "article" => "EKF tb-a-1-280",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Переходник 520 мм для рукояток управления рубильниками TwinBlock 80-250А",
        "article" => "EKF tb-a-1-520",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Пластина со щетками шириной 1000, глубиной 210мм",
        "article" => "DKC R5FSH1021",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Пластина со щетками шириной 600, глубиной 210мм",
        "article" => "DKC R5FSH621",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Пластина со щетками шириной 800, глубиной 210мм",
        "article" => "DKC R5FSH821",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Пластмассовый зажим для колодок PYF-012, -022, высота 25 мм, черный",
        "article" => "KIPPRIBOR BS-2/25P",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Пластмассовый зажим для колодок PYF-044, -144, высота 36 мм, черный",
        "article" => "KIPPRIBOR BS-4/36P",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Плата расширения для поддержки протокола MODBUS",
        "article" => "INSTART FCI - RS485",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Повторитель интерфейса RS485",
        "article" => "НТК Приборэнерго 0210550011061",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Полка 1U",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Полка выдвижная для клавиатуры",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Полка под клавиатуру выдвижная",
        "article" => "TLK-KB1-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Полка стационарная усиленная",
        "article" => "TLK-SHFC-1060F-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Потенциометр 10кОм EKF PROxima",
        "article" => "EKF PT22-10K",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Предохранителем 0.5A, 5х20мм",
        "article" => "ZFN004ST",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Предохранитель стеклянный 0.1 А, 250В, 5х20 мм",
        "article" => "H520 (ZH214)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Предохранитель стеклянный 0.25 А, 250В, 5х20 мм",
        "article" => "179020.0,25",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Предохранитель стеклянный 0.25 А, 250В, 5х20 мм",
        "article" => "H520 (ZH214) ВПБ6-2",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Предохранитель стеклянный 0.5 А, 250В, 5х20 мм",
        "article" => "H520 (ZH214) ВПБ6-5",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Предохранитель стеклянный 1 А, 250В, 5х20 мм",
        "article" => "H520 (ZH214) ВПБ6-7",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Предохранитель стеклянный 2 А, 250В, 5х20 мм",
        "article" =>  179020.2,
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Предохранитель: плавкая вставка; медленный; 32мА; 250ВAC; 5x20мм",
        "article" => "SIBA 179120.0.032",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Преобразователь RS485/Ethernet",
        "article" => "MOXA, NPORT 5630-8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Преобразователь RS485/Ethernet",
        "article" => "Входит в комплект поставки «Сокол-М1»",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Преобразователь частоты Серия FCI 0.75кВт",
        "article" => "INSTART FCI-G0,75-4B",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  11
      ],
      [
        "name" => "Приставка ПКИ-22 дополнительные контакты 2з+2р",
        "article" => "IEK KPK10-22",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 0.5 белый",
        "article" => "ПуГВнг (А)-LS 1х0.5 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 0.75 белый",
        "article" => "ПуГВнг (А)-LS 1х0.75 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 0.75 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1х0.75 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 0.75 синий",
        "article" => "ПуГВнг (А)-LS 1х0.75 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 1.5 белый",
        "article" => "ПуГВнг (А)-LS 1x1.5 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 1.5 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x1.5 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 1.5 синий",
        "article" => "ПуГВнг (А)-LS 1x1.5 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 10 белый",
        "article" => "ПуГВнг (А)-LS 1x10 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 10 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x10 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 120 белый",
        "article" => "ПуГВнг (А)-LS 1x120 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 16 белый",
        "article" => "ПуГВнг (А)-LS 1x16 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 16 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x16 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 16 синий",
        "article" => "ПуГВнг (А)-LS 1x16 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 2.5 белый",
        "article" => "ПуГВнг (А)-LS 1x2.5 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 2.5 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x2.5 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 2.5 синий",
        "article" => "ПуГВнг (А)-LS 1x2.5 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 25 белый",
        "article" => "ПуГВнг (А)-LS 1x25 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 25 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x25 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 25 синий",
        "article" => "ПуГВнг (А)-LS 1x25 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 4 белый",
        "article" => "ПуГВнг (А)-LS 1x4 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 4 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x4 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 4 синий",
        "article" => "ПуГВнг (А)-LS 1x4 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 6 белый",
        "article" => "ПуГВнг (А)-LS 1x6 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 6 желто-зеленый",
        "article" => "ПуГВнг (А)-LS 1x6 желто-зеленый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 6 синий",
        "article" => "ПуГВнг (А)-LS 1x6 синий",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод 95 белый",
        "article" => "ПуГВнг (А)-LS 1x95 белый",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Провод Ethernet",
        "article" => "ParLan F/UTP Cat5e 4х2х0.52 PVC",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Программируемый логический контроллер DI12 AI4 DO8",
        "article" => "ПТК ГПП БЦП-12.4.0.8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Программируемый логический контроллер DI16 DO8",
        "article" => "ПТК ГПП БЦП-16.0.0.8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Программируемый логический контроллер DI24 DO12",
        "article" => "ОВЕН ПЛК210-02-CS",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Прозрачный кожух-блокировка",
        "article" => "MEYERTEC MTB2-F04",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Процессор Intel Xeon Gold 6246R 35.75Mb 3.4Ghz",
        "article" => "CD8069504449801",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ПТК ЕКС БЦП-v3 DO8, DI12, AI4",
        "article" => "ПТК ЕКС БЦП-v3-12-4-8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "ПТК ЕКС БЦП-v3 DO8, DI16",
        "article" => "ПТК ЕКС БЦП-v3-16-0-8",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Рoзетка компьютерная внешняя 1-порт RJ-45 (8P8C), UTP, CAT5E",
        "article" => "REXANT 03-0121",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Разделитель полюсов (уп 25 шт)",
        "article" => "MEYERTEC MTU-C",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Разъем модульный РРМ78/4(PYF14A) для РЭК78/4(MY4)",
        "article" => "IEK RRP20D-RRM-4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Разъем плоский РПИ-М 1,5-(4,8)",
        "article" => "КВТ 47463",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Резистор 4.7 кОм +/-5%",
        "article" => "С2-33Н-0,25-4,7",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Рейки боковые, для шкафов CQE глубиной 400мм, 1 уп - 4шт.",
        "article" => "DKC R5TLE400",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Рейки боковые, для шкафов CQE глубиной 400мм, 1 упаковка - 4шт.",
        "article" => "DKC R5TLE400",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Рейки боковые, для шкафов CQE глубиной 800мм, 1 упаковка - 4шт.",
        "article" => "DKC R5TLE800",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле времени RT-SBA (задержка времени включ.) EKF PROxima",
        "article" => "EKF rt-sba",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле контроля напряжения",
        "article" => "Меандр РКН-3-15-15",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле контроля однофазного напряжения",
        "article" => "МЕАНДР РКН-1М УХЛ4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле напряжения трехфазное РНПП-311М вкл/откл защит",
        "article" => "Новатек-электро РНПП-311М",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле промежуточное 3А 24В 4ПК РЭК78/4 без розетки",
        "article" => "IEK RRP20-4-03-024D",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле тепловое РТИ-3359 48-65А",
        "article" => "IEK DRT30-0048-0065",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Реле термисторное РТ-М01-1-15 защита от перегрева двигателей",
        "article" => "РТ-М01-1-15 АС230В УХЛ4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Розетка на DIN",
        "article" => "MEYERTEC MT-DRS",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Ролики поворотные, для шкафов, TFE, TFL, TFR и стоек TRD",
        "article" => "TRK TLK-CB4",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Рубильник 40A 3P c рукояткой управления для прямой установки TwinBlock",
        "article" => "EKF tb-40-3p-f",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Рубильник 63A 3P c рукояткой управления для прямой установки TwinBlock",
        "article" => "EKF tb-63-3p-f",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Рубильник 80A 3P c рукояткой управления для прямой установки TwinBlock",
        "article" => "EKF tb-80-3p-f",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Рукоятка для управления через дверь рубильниками TwinBlock 80-100А",
        "article" => "EKF tb-80-100-dh",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сальник PG-21 диаметр кабеля 13-18 IP68",
        "article" => "DKC 53000",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сальник PG-29 диаметр кабеля 15-25 IP68",
        "article" => "DKC 53100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Саморез по металлу 4,2х13 сверлоконечный (200шт)",
        "article" => "Tech-KREP 102148",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 1800 x 1000 x 400 мм",
        "article" => "DKC R5CQE18104",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 1800 x 1000 x 800 мм",
        "article" => "DKC R5CQE18108",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 1800 x 800 x 400 мм",
        "article" => "DKC R5CQE1884",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 2000 x 1000 x 400 мм",
        "article" => "DKC R5CQE20104",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 2000 x 1000 x 800 мм",
        "article" => "DKC R5CQE20108",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 2000 x 1200 x 400 мм",
        "article" => "DKC R5CQE20124",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 2000 x 600 x 800 мм",
        "article" => "DKC R5CQE2068",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 2000 x 800 x 400 мм",
        "article" => "DKC R5CQE2084",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сборный шкаф CQE, с дверью и задней панелью, 2000 x 800 x 800 мм",
        "article" => "DKC R5CQE2088",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "СВ-75У-9005 Полка перфорированная ЦМО, грузоподъёмностью 100кг, глубина 750мм, черный",
        "article" => "",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Светильник светодиодный 8W 4000К 800Лм IP20 линейный 230V, 572 мм",
        "article" => "ЭРА LLED-01-08W-4000-W",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Светосигнальная колонна с зуммером, 24В AC/DC",
        "article" => "MEYERTEC MT45-RYG24B",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Светосигнальная колонна, 24В AC/DC",
        "article" => "MEYERTEC MT45-RYG24",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Серверный корпус Pro 1U660-HS04 RM 19, 1U, г. 660, БП 600ADS, 4xHotSwap, USB",
        "article" => "EX265523RUS",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Серверный шкаф 42U",
        "article" => "TFA-428012-PHPH-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Серверный шкаф 42U В1987хШ600хГ800мм",
        "article" => "ШТК-Э-42.6.8-44АА-9005",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Серверный шкаф 6U В368хШ600хГ350мм",
        "article" => "GDR-66035G",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, белый, 24V AC/DC IP65",
        "article" => "MEYERTEC MT22-S11",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, зеленый, 220V AC IP65",
        "article" => "MEYERTEC MT22-S63",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, зеленый, 24V AC/DC IP65",
        "article" => "MEYERTEC MT22-S13",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, зеленый, 24V DC, моноблок IP65",
        "article" => "MEYERTEC MT22-S13",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, красный, 220V AC IP65",
        "article" => "MEYERTEC MT22-S64",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, красный, 24V AC/DC IP65",
        "article" => "MEYERTEC MT22-S14",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, красный, 24V DC, моноблок IP65",
        "article" => "MEYERTEC MT22-S14",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сигнальная лампа, синий, 24V AC/DC IP65",
        "article" => "MEYERTEC MT22-S16",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Сирена Марс 24-КУ (110 дБ)",
        "article" => "Марс 24-КУ",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Система удаленного мониторинга, Контроллер в металлическом корпусе под монтаж в 19, встроенный БП 220В",
        "article" => "TLK-RSC-PRO-GY",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Соединитель для колодок PYF-011",
        "article" => "ВС-011.20Р",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Стойка для напольной установки навесного шкафа 1800мм",
        "article" => "DKC R5UFW18",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Тепловое реле перезагрузки на номинальный ток 630 А (250-400A)",
        "article" => "РТЛ-4400-2-630А-(250-400А)-УХЛ4-КЭАЗ",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термостат",
        "article" => "TDM SQ0832-0019",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Термостат 1NO, для регулирования вентиляторов",
        "article" => "MEYERTEC MTK-CT0",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термостат 1NO+1NC, для вентиляторов и нагревателей",
        "article" => "MEYERTEC MTK-CT2",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 16/8 желтая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-16-y-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 16/8 зеленая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-16-j-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 16/8 красная в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-16-r-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 16/8 синяя в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-16-g-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 20/10 желтая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-20-y-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 20/10 желто-зеленая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-20-yg-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 20/10 зеленая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-20-j-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 20/10 красная в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-20-r-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 20/10 синяя в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-20-g-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 30/15 желтая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-30-y-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 30/15 желто-зеленая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-30-yg-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 30/15 зеленая в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-30-j-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 30/15 красная в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-30-r-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Термоусаживаемая трубка ТУТ нг 30/15 синяя в отрезках по 1м EKF PROxima",
        "article" => "EKF tut-30-g-1m",
        "unit_id" =>  3,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 10–6–5: Наконечник кабельный медный луженый (сечение 10 мм² под крепежный болт М6)",
        "article" => "КВТ 40832",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 120–12–18: Наконечник кабельный медный луженый (сечение 120 мм² под крепежный болт М12)",
        "article" => "КВТ 40903",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 120–16–18: Наконечник кабельный медный луженый (сечение 120 мм² под крепежный болт М16)",
        "article" => "КВТ 40904",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 16–6–6: Наконечник кабельный медный луженый (сечение 16 мм² под крепежный болт М6)",
        "article" => "КВТ 40835",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 25–6–7: Наконечник кабельный медный луженый (сечение 25 мм² под крепежный болт М6)",
        "article" => "КВТ 40878",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 25–8–8: Наконечник кабельный медный луженый (сечение 25 мм² под крепежный болт М8)",
        "article" => "КВТ 40881",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 4–6–3: Наконечник кабельный медный луженый (сечение 4 мм² под крепежный болт М6)",
        "article" => "КВТ 40827",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 6–6–4: Наконечник кабельный медный луженый (сечение 6 мм² под крепежный болт М6)",
        "article" => "КВТ 40830",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "ТМЛ 95–10–15: Наконечник кабельный медный луженый (сечение 95 мм² под крепежный болт М10)",
        "article" => "КВТ 40897",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Тумблер с короткой ручкой 3поз",
        "article" => "MEYERTEC MTB2-BDZ133",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI12, AI4",
        "article" => "УМНОГОР ПТК ГПП БЦП-12.4.0-8-1.0-1-0-И:",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI16",
        "article" => "УМНОГОР ПТК ГПП БЦП-16.0.0-8-1.0-1-0-И:",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI16",
        "article" => "УМНОГОР ПТК ГПП БЦП-16.0.0-8-2.0-1-0-И:",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI8, AI8",
        "article" => "УМНОГОР ПТК ГПП БЦП-8.8.0-8-1.0-1-0-И:",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП БЦП-v3 DO8, DI12, AI4",
        "article" => "УМНОГОР ПТК ГПП БЦП БЦП-v3-12.4.0-8-2.0-1-0-И:",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  13
      ],
      [
        "name" => "Универсальные рельсы",
        "article" => "4POSTRAILKIT2136",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Универсальные рельсы CYBERPOWER (2U)",
        "article" => "4POSTRAILKIT2136",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Устройство защиты от перегрева при утечке воды + 2xPT100",
        "article" => "KQ1010",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Фиксатор клеммных групп",
        "article" => "MEYERTEC MTU-S1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Фиксатор торцевой",
        "article" => "MEYERTEC MTU-S1",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Хомут 200х2.5мм нейлон (100шт)",
        "article" => "Navigator 71034",
        "unit_id" =>  1,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 1.5 кВт",
        "article" => "VEDA VF-101-P1K5-0004-A-T4-E20-B-H (ABC00024)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  15
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 11 кВт",
        "article" => "VEDA VF-101-P11K-0025-A-T4-E20-B-H (ABC00029)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  12
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 160кВт",
        "article" => "VEDA VF-101-P160K-0110-A-T4-E20-N-H (ABC00036)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 185кВт",
        "article" => "VEDA VF-101-P185-0340-A-T4-E20-N-H-D (ABC00042)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 2.2 кВт",
        "article" => "VEDA VF-101-P2K2-0006-A-T4-E20-B-H (ABC00025)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  15
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 30 кВт",
        "article" => "VEDA VF-101-P30K-0060-A-T4-E20-B-H (ABC00033)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 5.5 кВт",
        "article" => "VEDA VF-101-P5K5-0013-A-T4-E20-B-H (ABC00027)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  15
      ],
      [
        "name" => "Частотный преобразователь VEDA VF-101 7.5 кВт",
        "article" => "VEDA VF-101-P7K5-0017-A-T4-E20-B-H (ABC00028)",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шайба DIN125 М6 плоская оцинкованная",
        "article" => "Tech-KREP 00005584",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Шайба DIN127 М6 гроверная пружинная оцинкованная",
        "article" => "Tech-KREP 00005951",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Шайба DIN9021 М6 увеличенная кузовная оцинкованная",
        "article" => "Tech-KREP 00005594",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  14
      ],
      [
        "name" => "Шина PEN земля-ноль 6х9мм 12/2 (12групп/креп по краям)",
        "article" => "IEK YNN11-12-100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина PEN земля-ноль 8х12мм 24/2 (24групп/креп по краям)",
        "article" => "IEK YNN21-24-100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина заземления медная вертикальная, медная 42U, 6 клемм, вертикальная",
        "article" => "TLK-ERH-CU-42U",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Шина нулевая на 2 угловых изоляторах",
        "article" => "IEK YNN10-69-12C2-K07",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина нулевая на DIN-рейку в корпусе 2х7 групп",
        "article" => "Navigator 71 235 NBB-C27",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина нулевая на DIN-рейку в корпусе 4х15 групп",
        "article" => "Navigator 71 240 NBB-C415",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина нулевая на DIN-рейку в корпусе 4х7 групп",
        "article" => "Navigator 71 238 NBB-C47",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина соединительная типа PIN (штырь) 1Р 63А (1м)",
        "article" => "IEK YNS21-1-063",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина соединительная типа PIN (штырь) 3Р 100А (1м)",
        "article" => "IEK YNS21-3-100",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шина соединительная типа PIN (штырь) 3Р 63А (1м)",
        "article" => "IEK YNS21-3-063",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Шинный распределительный блок ШРБ-200 EKF PROxima",
        "article" => "EKF plc-shrb-200",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Щеточный ввод для напольных и настенных шкафов, 2 щетки, черный",
        "article" => "TLK-BRSH-BK",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  10
      ],
      [
        "name" => "Щит с монтажной панелью ЩМП 800x600x300мм IP65 серия ST",
        "article" => "DKC R5ST0863",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  18
      ],
      [
        "name" => "Щит с монтажной панелью ЩМП 800x600x300мм IP65 серия ST",
        "article" => "DKC R5ST0863",
        "unit_id" =>  2,
        "element_type_id" => 1,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ]

    ]);
    DB::table('elements')->insert([
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI16",
        "article" => "УМНОГОР ПТК ГПП БЦП-16.0.0-8-1.0-1-0-И: ",
        "unit_id" =>  2,
        "element_type_id" => 3,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI12, AI4",
        "article" => "УМНОГОР ПТК ГПП БЦП-12.4.0-8-1.0-1-0-И: ",
        "unit_id" =>  2,
        "element_type_id" => 3,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "УМНОГОР ПТК ГПП БЦП DO8, DI8, AI8",
        "article" => "УМНОГОР ПТК ГПП БЦП-8.8.0-8-1.0-1-0-И: ",
        "unit_id" =>  2,
        "element_type_id" => 3,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок расширения аналоговых сигналов входных AI8 (4..20мА)",
        "article" => "УМНОГОР ПТК ГПП БАВ-8.0.0",
        "unit_id" =>  2,
        "element_type_id" => 2,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок расширения аналоговых сигналов входных AI16 (4..20мА)",
        "article" => "УМНОГОР ПТК ГПП БАВ-16.0.0",
        "unit_id" =>  2,
        "element_type_id" => 2,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, DO8",
        "article" => "УМНОГОР ПТК ГПП БУП-8.0",
        "unit_id" =>  2,
        "element_type_id" => 2,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок расширения цифровых сигналов выходных, DO16",
        "article" => "УМНОГОР ПТК ГПП БУП-16.0",
        "unit_id" =>  2,
        "element_type_id" => 2,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок расширения цифровых сигналов входных, DI8",
        "article" => "УМНОГОР ПТК ГПП БДВ-8",
        "unit_id" =>  2,
        "element_type_id" => 2,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Блок расширения цифровых сигналов входных, DI16",
        "article" => "УМНОГОР ПТК ГПП БДВ-16",
        "unit_id" =>  2,
        "element_type_id" => 2,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
      [
        "name" => "Преобразователь частоты Серия FCI 0.75кВт",
        "article" => "INSTART FCI-G0,75-4B",
        "unit_id" =>  2,
        "element_type_id" => 4,
        "type_operation_id" => 5,
        "weight_per_unit" =>  1
      ],
    ]);
  }
}
