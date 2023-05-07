SELECT builds.id, 
	processors.name AS processor, 
    coolers.name AS cooler, 
    builds.coolerCount, 
    motherboards.name AS motherboard, 
    memorys.name AS memory, 
    builds.memoryCount, 
    harddrives.name AS harddrive, 
    builds.harddriveCount, 
    videocards.name AS videocard, 
    powerblocks.name AS powerblock, 
    corpuses.name AS corpus 
FROM builds 
	INNER JOIN processors ON builds.processorId = processors.id
    INNER JOIN coolers ON builds.coolerId = coolers.id
    INNER JOIN motherboards ON builds.coolerId = motherboards.id
    INNER JOIN memorys ON builds.memoryId = memorys.id
    INNER JOIN harddrives ON builds.harddriveId = harddrives.id
    INNER JOIN videocards ON builds.videocardId = videocards.id
    INNER JOIN powerblocks ON builds.powerblockId = powerblocks.id
    INNER JOIN corpuses ON builds.corpusId = corpuses.id