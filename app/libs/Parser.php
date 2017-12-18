<?php 

function show($variable){
	print_r($variable);
	die();
}
class Parser{
	public $name;
	public $methods;
	public $response;
	
	public function __construct($name){
		$this->name=$name;
		$this->ref_class=new ReflectionClass($name);
		$this->methods=$this->extract_inherited();
		if($this->ref_class->getParentClass()){
			$this->parent=$this->ref_class->getParentClass()->name;
		}
		else{
			$this->parent='none';
		}
		
		
	}

	private function extract_inherited(){
		$methods=array_filter($this->ref_class->getMethods(),function($method){
		
			return $method->class == $this->name; 
		});
		return $methods;
	}
	
	public function dump(){
		foreach($this->methods as $i=>$method){
			$response[$i]=[
				'name'=>$method->name,
				'returns'=>(string)$method->getReturnType(),
				'type'=>$this->encapsulation($method),
				'parameters'=>[]
			];
			$parameters=$method->getParameters();
			foreach($parameters as $parameter){
				$response[$i]['parameters'][]=['name'=>$parameter->name,'type'=>(string)$parameter->getType()];
			}
		}	
		

		return $response;
	}

	private function encapsulation(ReflectionMethod $method){
		if($method->isPublic()){
			return 'Public';
		}
		elseif($method::IS_PUBLIC){
			return 'Private';
		}
		elseif($method->isPrivate()){
			return 'Static';
		}
		elseif($method->isProtected()){
			return 'Protected';
		}
	}
}

 ?>