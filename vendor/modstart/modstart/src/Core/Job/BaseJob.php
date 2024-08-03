<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Core\Job; use Illuminate\Bus\Queueable; use Illuminate\Contracts\Queue\ShouldQueue; use Illuminate\Queue\InteractsWithQueue; use Illuminate\Queue\SerializesModels; if (PHP_VERSION_ID >= 80000) { abstract class BaseJob implements ShouldQueue { use Queueable, InteractsWithQueue, SerializesModels; } } else { abstract class BaseJob implements \Illuminate\Contracts\Bus\SelfHandling, ShouldQueue { use Queueable, InteractsWithQueue, SerializesModels; } }