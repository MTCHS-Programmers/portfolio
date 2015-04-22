<?php
	global $skillList, $sampleList, $domDoc;
	$skillList = query("SELECT `name`, `color` FROM skillList", "portfolio")["rows"];
	$sampleList = array();
	$domDoc = new DOMDocument();
	
	function listSkills() {
		global $skillList, $sampleList, $domDoc;
		
		$skillDiv = $domDoc->createElement("div");
		
		foreach($skillList as $skill) {
			$skillDiv->setAttribute("class", "skill");
			$skillDiv->nodeValue = $skill["name"];
			
			echo $domDoc->saveHTML($skillDiv);
		}
		
		echo "<script>" . 
			"skillList=" . json_encode($skillList) . 
		"</script>";
	}
	
	function listWorkSamples() {
		global $skillList, $sampleList, $domDoc;
		
		/* create a sampleContainer DOMNode that will later be appended to the document */
		for($i=0; $i<count($skillList); $i++) {
			$skillSampleContainer = $domDoc->createElement("div");
			$skillSampleContainer->setAttribute("class", "sampleList");
			$skillSampleContainer->setAttribute("id", $skillList[$i]["name"]);
			
			$sampleList = query("SELECT * FROM sampleList WHERE skillID=\"" . ($i + 1) . "\";", "portfolio")["rows"];
			foreach($sampleList as $sample) {
				/* iterate through every sample for a skill and append the node to its container */
				$sampleDiv = $domDoc->createElement("div");
				$sampleDiv->setAttribute("class", "sample");
				
				$title = $domDoc->createElement("p");
				$title->setAttribute("class", "title");
				$title->nodeValue = $sample["name"];
				
				$desc = $domDoc->createElement("div");
				$desc->setAttribute("class", "desc");
				$desc->nodeValue = $sample["desc"];
				
				$git = $domDoc->createElement("div");
				$git->setAttribute("class", "git linkContainer");
					$gitSpan = $domDoc->createElement("span");
					$gitSpan->setAttribute("class", "git linkTitle");
					$gitSpan->nodeValue = "Git Repos: ";
					
					$gitLink = $domDoc->createElement("a");
					$gitLink->setAttribute("class", "git link");
					$gitLink->setAttribute("href", $sample["git"]);
					$gitLink->setAttribute("title", $sample["git"]);
					$gitLink->nodeValue = limitLink($sample["git"]);
					
					$git->appendChild($gitSpan);
					$git->appendChild($gitLink);
				
				$live = $domDoc->createElement("div");
				$live->setAttribute("class", "live linkContainer");
					$liveSpan = $domDoc->createElement("span");
					$liveSpan->setAttribute("class", "live linkTitle");
					$liveSpan->nodeValue = "Live Demo: ";
					
					$liveLink = $domDoc->createElement("a");
					$liveLink->setAttribute("class", "live link");
					$liveLink->setAttribute("href", $sample["live"]);
					$liveLink->setAttribute("title", $sample["live"]);
					$liveLink->nodeValue = limitLink($sample["live"]);
					
					$live->appendChild($liveSpan);
					$live->appendChild($liveLink);
				
				$sampleDiv->appendChild($title);
				$sampleDiv->appendChild($desc);
				if(strlen($sample["live"]) !== 0) {$sampleDiv->appendChild($live);}
				if(strlen($sample["git"]) !== 0) {$sampleDiv->appendChild($git);}
				$skillSampleContainer->appendChild($sampleDiv);
			}
			
			echo $domDoc->saveHTML($skillSampleContainer);
		}
	}
	
	function limitLink($link) {
		if(strlen($link) >= 50) {
			return substr($link, 0, 47) . "...";
		}
		else {
			return $link;
		}
	}
?>