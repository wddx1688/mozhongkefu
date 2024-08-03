<?php
/**
 * ------------------------ 
 *  版权所有  www.tecmz.com
 *  商业版本请购买正版授权使用
 * ------------------------
*/ namespace ModStart\Field; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Contracts\Support\Renderable; use Illuminate\Database\Eloquent\Model; use Illuminate\Support\Facades\Log; use Illuminate\Support\Facades\Validator; use Illuminate\Support\Facades\View; use ModStart\Core\Dao\ModelUtil; use ModStart\Core\Util\CRUDUtil; use ModStart\Core\Util\IdUtil; use ModStart\Detail\Detail; use ModStart\Field\Type\FieldRenderMode; use ModStart\Form\Form; use ModStart\Grid\Grid; use ModStart\ModStart; use ModStart\Support\Concern\HasFluentAttribute; use ModStart\Support\Manager\FieldManager; class AbstractField implements Renderable { use HasFluentAttribute; protected static $css = array(); protected static $js = array(); protected $script = ''; protected $context; protected $id; protected $name; protected $column; protected $label; protected $value = null; protected $defaultValue = null; protected $fixedValue = null; protected $rules = array(); protected $view = null; protected $variables = array(); protected $item; protected $fluentAttributes = array('listable', 'addable', 'editable', 'formShowOnly', 'showable', 'sortable', 'renderMode', 'defaultValue', 'placeholder', 'help', 'tip', 'width', 'styleFormField', 'readonly', 'hookFormatValue', 'hookValueUnserialize', 'hookValueSerialize', 'hookValueSaved', 'hookRendering', 'isLayoutField', 'isCustomField', 'gridFixed', 'gridEditable'); protected $listable = true; protected $addable = true; protected $editable = true; protected $formShowOnly = false; protected $showable = true; protected $sortable = false; protected $renderMode; protected $placeholder = null; protected $help = null; protected $tip = null; protected $styleFormField = null; protected $width = ''; protected $readonly = false; protected $hookFormatValue; protected $hookValueUnserialize; protected $hookValueSerialize; protected $hookValueSaved; protected $hookRendering; protected $isLayoutField = false; protected $isCustomField = false; protected $gridFixed = null; protected $gridEditable = false; public static function getAssets() { return array('css' => static::$css, 'js' => static::$js); } public function __construct($NS5_3, $wnXyT = array()) { goto vLpM_; ynbzM: $this->column = $NS5_3; goto RxPRo; wZ6nA: $this->setup(); goto LZicN; RxPRo: if (isset($wnXyT[0])) { $this->label = $wnXyT[0]; } else { $this->label = null; } goto wZ6nA; vLpM_: $this->id = IdUtil::generate('Field'); goto ynbzM; LZicN: FieldManager::uses(static::class); goto jusaH; jusaH: } protected function setup() { } public function postSetup() { } public function context($bzZJF = null) { goto wHmOD; wHmOD: if (null === $bzZJF) { return $this->context; } goto a8SDA; a8SDA: $this->context = $bzZJF; goto h0U5x; h0U5x: return $this->context; goto MeDb7; MeDb7: } public function rules($nmYJC = null) { goto KefVP; KefVP: if (is_null($nmYJC)) { return $this->rules; } goto aJFiY; qrBNT: return $this; goto FrDoQ; aJFiY: if (is_array($nmYJC)) { $nmYJC = array_filter($nmYJC); $this->rules = array_merge($this->rules, $nmYJC); } else { if (!empty($nmYJC)) { $this->rules[] = $nmYJC; } } goto qrBNT; FrDoQ: } public function required() { return $this->rules('required'); } public function ruleRegex($PjL1d) { return $this->rules('regex:' . $PjL1d); } public function ruleUrl() { return $this->ruleRegex('/^https?:\\/\\//'); } public function ruleUnique($R3agm, $dBa7F = null) { if (null === $dBa7F) { $dBa7F = $this->column(); } return $this->rules('unique:' . $R3agm . ',' . $dBa7F . ',' . CRUDUtil::id()); } public function id() { return $this->id; } public function column() { return $this->column; } private function formatName($NS5_3) { if (is_string($NS5_3)) { goto ifYGA; EGMGw: return $HQ4FM; goto RrORV; HHxGF: $HQ4FM = array_shift($RXZrt); goto a9u3E; bwvm2: if (count($RXZrt) == 1) { return $RXZrt[0]; } goto HHxGF; ifYGA: $RXZrt = explode('.', $NS5_3); goto bwvm2; a9u3E: foreach ($RXZrt as $u1UYg) { $HQ4FM .= "[{$u1UYg}]"; } goto EGMGw; RrORV: } } public function name($VuXfH = null) { goto C7Xh_; sudak: return $this; goto uJQJM; C7Xh_: if (null === $VuXfH) { if (empty($this->name)) { return $this->formatName($this->column); } return $this->name; } goto IlMbA; IlMbA: $this->name = $VuXfH; goto sudak; uJQJM: } public function label($VuXfH = null) { goto PoUX_; PoUX_: if (null === $VuXfH) { return $this->label; } goto MGeDO; MGeDO: $this->label = $VuXfH; goto jdUAw; jdUAw: return $this; goto yi0y_; yi0y_: } public function value($VuXfH = null) { goto mWHhl; mWHhl: if (null === $VuXfH) { return $this->value; } goto F5VR7; F5VR7: $this->value = $VuXfH; goto BHXoV; BHXoV: return $this; goto Tn6Vu; Tn6Vu: } public function fixedValue($Ggwxw = null) { goto Cd0JQ; Cd0JQ: if (null === $Ggwxw) { return $this->fixedValue; } goto gFOE1; ypFM3: return $this; goto IwOxZ; gFOE1: $this->fixedValue = $Ggwxw; goto ypFM3; IwOxZ: } public function setValue($VuXfH) { $this->value = $VuXfH; return $this; } public function item($DUr2V = null) { goto xsHGw; xsHGw: if (null === $DUr2V) { return $this->item; } goto e_95w; dzLis: return $this; goto dU3Xs; e_95w: $this->item = $DUr2V; goto dzLis; dU3Xs: } public function unserializeValue($VuXfH, AbstractField $dBa7F) { return $VuXfH; } public function serializeValue($VuXfH, $Wa8N4) { return $VuXfH; } public function prepareInput($VuXfH, $QG_t_) { return $VuXfH; } public function fill($DUr2V) { goto U4aEI; nPyzP: if ($this->hookFormatValue) { $VuXfH = call_user_func($this->hookFormatValue, $VuXfH, $this); } goto WVvDG; WVvDG: $this->value = $VuXfH; goto hGE4T; rhzA0: if (is_array($DUr2V)) { $VuXfH = array_get($DUr2V, $this->column); } else { if (str_contains($this->column, '.')) { $VuXfH = ModelUtil::traverse($DUr2V, $this->column); } else { $VuXfH = isset($DUr2V->{$this->column}) ? $DUr2V->{$this->column} : null; } } goto TklRQ; TklRQ: if ($this->hookValueUnserialize) { $VuXfH = call_user_func($this->hookValueUnserialize, $VuXfH, $this); } goto djWoo; sTO4Q: $this->item = $DUr2V; goto mxhnI; djWoo: $VuXfH = $this->unserializeValue($VuXfH, $this); goto nPyzP; mxhnI: if (is_array($this->column)) { foreach ($this->column as $cANPj => $NS5_3) { goto SkaZp; SkaZp: $VuXfH = array_get($DUr2V, $NS5_3); goto X2c8s; UlTAw: $VuXfH = $this->unserializeValue($VuXfH, $this); goto iWTeD; iWTeD: if ($this->hookFormatValue) { $VuXfH = call_user_func($this->hookFormatValue, $VuXfH, $this); } goto JXnKU; JXnKU: $this->value[$cANPj] = $VuXfH; goto B8BjV; X2c8s: if ($this->hookValueUnserialize) { $VuXfH = call_user_func($this->hookValueUnserialize, $VuXfH, $this); } goto UlTAw; B8BjV: } return; } goto rhzA0; U4aEI: if ($this->isLayoutField()) { return; } goto sTO4Q; hGE4T: } public function addVariables(array $XkA0X = array()) { $this->variables = array_merge($this->variables, $XkA0X); return $this; } public function setVariable($cANPj, $VuXfH) { $this->variables[$cANPj] = $VuXfH; return $this; } public function getVariable($cANPj, $RsCDD = null) { if (isset($this->variables[$cANPj])) { return $this->variables[$cANPj]; } return $RsCDD; } public function getValidator(array $gY_Ck) { goto ClBJe; hsgUO: if (!($OUWMf = $this->rules())) { return false; } goto JLtYi; UuEU7: if (is_array($this->column)) { foreach ($this->column as $cANPj => $NS5_3) { goto kCpOU; mDLSr: $gY_Ck[$NS5_3 . $cANPj] = array_get($gY_Ck, $NS5_3); goto alqqc; alqqc: $UgWZQ[$NS5_3 . $cANPj] = $OUWMf; goto ReLez; kCpOU: if (!array_key_exists($NS5_3, $gY_Ck)) { continue; } goto mDLSr; ReLez: $I1N_U[$NS5_3 . $cANPj] = $this->label . "[{$NS5_3}]"; goto TnV9e; TnV9e: } } goto oKxZc; JLtYi: if (is_string($this->column)) { goto X_wxy; KkpBu: $I1N_U[$this->column] = $this->label; goto wZjrd; IO5e2: $UgWZQ[$this->column] = $OUWMf; goto KkpBu; X_wxy: if (!array_has($gY_Ck, $this->column)) { return false; } goto IO5e2; wZjrd: } goto UuEU7; oKxZc: return Validator::make($gY_Ck, $UgWZQ, array(), $I1N_U); goto yXelW; ClBJe: $UgWZQ = $I1N_U = array(); goto hsgUO; yXelW: } protected function variables() { $XkA0X = array_merge($this->fluentAttributeVariables(), $this->variables, array('id' => $this->id, 'name' => $this->name(), 'value' => $this->value(), 'fixedValue' => $this->fixedValue(), 'label' => $this->label, 'column' => $this->column, 'placeholder' => $this->placeholder(), 'rules' => $this->rules)); return $XkA0X; } private function transformVariables($XkA0X, $kKcR8) { switch ($this->renderMode()) { case FieldRenderMode::GRID: if ($XkA0X['gridEditable'] instanceof \Closure) { $XkA0X['gridEditable'] = call_user_func_array($XkA0X['gridEditable'], array($this, $kKcR8['item'], $kKcR8['index'])); } break; } return $XkA0X; } public function view($Meki8 = '', $HQ4FM = null) { goto N3aPa; Sh71_: return 'modstart::core.field.' . $HQ4FM . ($Meki8 ? '-' . $Meki8 : ''); goto goy0V; N3aPa: if (!empty($this->view)) { return $this->view . ($Meki8 ? '-' . $Meki8 : ''); } goto YuBHf; YuBHf: if (null === $HQ4FM) { $cVwn0 = explode('\\', get_called_class()); $HQ4FM = lcfirst(end($cVwn0)); } goto Sh71_; goy0V: } public function render() { return $this->renderView($this, $this->item); } public function renderView(AbstractField $dBa7F, $DUr2V, $kOFY1 = 0) { try { goto Ad5Nm; X3vl9: ModStart::script($this->script); goto QU3PI; jDGgJ: switch ($this->renderMode) { case FieldRenderMode::FORM: return View::make($this->view(), $XkA0X)->render(); case FieldRenderMode::DETAIL: if (view()->exists($de9hK = $this->view($this->renderMode))) { return View::make($de9hK, $XkA0X)->render(); } return View::make($this->view($this->renderMode, 'text'), $XkA0X)->render(); case FieldRenderMode::GRID: goto DWM75; DWM75: if (view()->exists($de9hK = $this->view($this->renderMode))) { $XkA0X = $this->transformVariables($XkA0X, array('item' => $DUr2V, 'index' => $kOFY1)); return View::make($de9hK, array_merge(array('item' => $DUr2V, '_index' => $kOFY1), $XkA0X))->render(); } goto sh6DE; Po9tX: if (str_contains($NS5_3, '.')) { $VuXfH = (string) ModelUtil::traverse($DUr2V, $NS5_3); } else { $VuXfH = (string) $DUr2V->{$NS5_3}; } goto edWwA; edWwA: return htmlspecialchars($VuXfH); goto fSt_e; sh6DE: if (is_array($DUr2V->{$NS5_3})) { return join(', ', $DUr2V->{$NS5_3}); } goto Po9tX; fSt_e: } goto YJnvX; umRjX: if ($this->hookRendering instanceof \Closure) { $nMi2c = call_user_func($this->hookRendering, $this, $DUr2V, $kOFY1); if (null !== $nMi2c) { if ($nMi2c instanceof AutoRenderedFieldValue) { return view('modstart::core.field.autoRenderedField-' . $this->renderMode, array('label' => $this->label, 'tip' => $this->tip, 'help' => $this->help, 'value' => $nMi2c->getValue(), 'rules' => $this->rules))->render(); } return $nMi2c; } } goto X3vl9; QU3PI: $XkA0X = $this->variables(); goto jDGgJ; Ad5Nm: $NS5_3 = $dBa7F->column(); goto umRjX; YJnvX: } catch (\Throwable $l8i0J) { Log::error('FieldRenderModeError - ' . $l8i0J->getMessage() . ' - ' . $l8i0J->getTraceAsString()); return new \Exception('FieldRenderModeError - ' . $l8i0J->getMessage()); } throw new \Exception('FieldRenderModeNotExist'); } public function __call($lrQvV, $wnXyT) { if ($this->isFluentAttribute($lrQvV)) { return $this->fluentAttribute($lrQvV, $wnXyT); } throw new \Exception('AbstractField __call error : ' . $lrQvV); } }