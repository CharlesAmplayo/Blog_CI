<center><h3> Introduction to HDFS Infrastructure </h3>

<div>
    <img src="assets/hadoop pics/HDFS-architecture.jpg">

</center>
   <h5>
    <p>Hadoop Distributed File System follows the master-slave architecture. Each cluster comprises a single master node and multiple slave nodes. Internally the files get divided into one or more blocks, and each block is stored on different slave machines depending on the replication factor (which you will see later in this article).</p>
    <p>The master node stores and manages the file system namespace, that is information about blocks of files like block locations, permissions, etc. The slave nodes store data blocks of files.</p>
    The Master node is the NameNode and DataNodes are the slave nodes.
    </h5>
    <br>
    <h3>What is HDFS NameNode?</h3>
    <h5>
    <p>NameNode is the centerpiece of the Hadoop Distributed File System. It maintains and manages the file system namespace and provides the right access permission to the clients.</P>

    <p>The NameNode stores information about blocks locations, permissions, etc. on the local disk in the form of two files:</p>
        <ul>
            <li>Fsimage: Fsimage stands for File System image. It contains the complete namespace of the Hadoop file system since the NameNode creation.</li>

            <li>Edit log: It contains all the recent changes performed to the file system namespace to the most recent Fsimage.</li>
        </ul>
    </h5>
    <h3>Functions of HDFS NameNode<h3>
    <h5>
    <ol>
        <li>It executes the file system namespace operations like opening, renaming, and closing files and directories.</li>
        <li>NameNode manages and maintains the DataNodes.</li>
        <li> It determines the mapping of blocks of a file to DataNodes.</li>
        <li>NameNode records each change made to the file system namespace.</li>
        <li>It keeps the locations of each block of a file.</li>
        <li>NameNode takes care of the replication factor of all the blocks.</li>
        <li>NameNode receives heartbeat and block reports from all DataNodes that ensure DataNode is alive.</li>
        <li>If the DataNode fails, the NameNode chooses new DataNodes for new replicas.</li>
    </ol>
    </h5>
    <br>
    <h3>What is HDFS DataNode?</h3>
    <h5>DataNodes are the slave nodes in Hadoop HDFS. DataNodes are inexpensive commodity hardware. They store blocks of a file.</h5>
    <h3>Functions DataNode</h3>
    <h5>
    <ol>
        <li>DataNode is responsible for serving the client read/write requests.</li>
        <li>Based on the instruction from the NameNode, DataNodes performs block creation, replication, and deletion.</li>
        <li>DataNodes send a heartbeat to NameNode to report the health of HDFS.</li>
        <li>DataNodes also sends block reports to NameNode to report the list of blocks it contains.</li>
    </ol>
    <br>
    
    <h3>What is Secondary NameNode?</h3>
    <center>
    <img src="assets/hadoop pics/secondary.jpg">
    </center>
    <br>
    <h5>
    <p>Apart from DataNode and NameNode, there is another daemon called the secondary NameNode. Secondary NameNode works as a helper node to primary NameNode but doesn’t replace primary NameNode.</p>
    <p>When the NameNode starts, the NameNode merges the Fsimage and edit logs file to restore the current file system namespace. Since the NameNode runs continuously for a long time without any restart, the size of edit logs becomes too large. This will result in a long restart time for NameNode.</p>
    <p>Secondary NameNode solves this issue.</p>
    <p>Secondary NameNode downloads the Fsimage file and edit logs file from NameNode.</p>
    <p>It periodically applies edit logs to Fsimage and refreshes the edit logs. The updated Fsimage is then sent to the NameNode so that NameNode doesn’t have to re-apply the edit log records during its restart. This keeps the edit log size small and reduces the NameNode restart time.</p>
    <p> If the NameNode fails, the last save Fsimage on the secondary NameNode can be used to recover file system metadata. The secondary NameNode performs regular checkpoints in HDFS.</p>
    </h5>
    <br>

    <h3>What is Checkpoint Node?</h3>
    <h5>
    <p>The Checkpoint node is a node that periodically creates checkpoints of the namespace.</p>
    <p>Checkpoint Node in Hadoop first downloads Fsimage and edits from the Active Namenode. Then it merges them (Fsimage and edits) locally, and at last, it uploads the new image back to the active NameNode.</p>
    <p>I t stores the latest checkpoint in a directory that has the same structure as the Namenode’s directory. This permits the checkpointed image to be always available for reading by the NameNode if necessary.</p>
    </h5>
    <br>

    <h3>What is Backup Node?</h3>
    <h5>
    <p>A Backup node provides the same checkpointing functionality as the Checkpoint node.</p>

    <p>In Hadoop, Backup node keeps an in-memory, up-to-date copy of the file system namespace. It is always synchronized with the active NameNode state.</p>


    <p>It is not required for the backup node in HDFS architecture to download Fsimage and edits files from the active NameNode to create a checkpoint. It already has an up-to-date state of the namespace state in memory.</p>

    <p>The Backup node checkpoint process is more efficient as it only needs to save the namespace into the local Fsimage file and reset edits. NameNode supports one Backup node at a time.</p>

    <p>This was about the different types of nodes in HDFS Architecture. Further in this HDFS Architecture tutorial, we will learn about the Blocks in HDFS, Replication Management, Rack awareness and read/write operations.</p>
    </h5>
    <br>
    <a href="https://data-flair.training/blogs/hadoop-hdfs-architecture/">Source<a> 

</div>