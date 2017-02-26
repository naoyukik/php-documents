/**
 * (PECL ev >= 0.2.0)<br/>
 * @link http://php.net/manual/en/evstat.attr.php
 * @return array Returns array with the values most recently detect by Ev(without actual
 * stat
 * 'ing):
 * List for item keys of the array returned by EvStat::attr
 * Key
 * Description
 * 'dev'
 * ID of device containing file
 * 'ino'
 * inode number
 * 'mode'
 * protection
 * 'nlink'
 * number of hard links
 * 'uid'
 * user ID of owner
 * 'size'
 * total size, in bytes
 * 'gid'
 * group ID of owner
 * 'rdev'
 * device ID (if special file)
 * 'blksize'
 * blocksize for file system I/O
 * 'blocks'
 * number of 512B blocks allocated
 * 'atime'
 * time of last access
 * 'ctime'
 * time of last status change
 * 'mtime'
 * time of last modificationstatList for item keys of the array returned by EvStat::attr
 * Key
 * Description
 * 'dev'
 * ID of device containing file
 * 'ino'
 * inode number
 * 'mode'
 * protection
 * 'nlink'
 * number of hard links
 * 'uid'
 * user ID of owner
 * 'size'
 * total size, in bytes
 * 'gid'
 * group ID of owner
 * 'rdev'
 * device ID (if special file)
 * 'blksize'
 * blocksize for file system I/O
 * 'blocks'
 * number of 512B blocks allocated
 * 'atime'
 * time of last access
 * 'ctime'
 * time of last status change
 * 'mtime'
 * time of last modificationEvStat::attrKey
 * Description
 * 'dev'
 * ID of device containing file
 * 'ino'
 * inode number
 * 'mode'
 * protection
 * 'nlink'
 * number of hard links
 * 'uid'
 * user ID of owner
 * 'size'
 * total size, in bytes
 * 'gid'
 * group ID of owner
 * 'rdev'
 * device ID (if special file)
 * 'blksize'
 * blocksize for file system I/O
 * 'blocks'
 * number of 512B blocks allocated
 * 'atime'
 * time of last access
 * 'ctime'
 * time of last status change
 * 'mtime'
 * time of last modificationKey
 * DescriptionKey
 * DescriptionKeyDescription'dev'
 * ID of device containing file
 * 'ino'
 * inode number
 * 'mode'
 * protection
 * 'nlink'
 * number of hard links
 * 'uid'
 * user ID of owner
 * 'size'
 * total size, in bytes
 * 'gid'
 * group ID of owner
 * 'rdev'
 * device ID (if special file)
 * 'blksize'
 * blocksize for file system I/O
 * 'blocks'
 * number of 512B blocks allocated
 * 'atime'
 * time of last access
 * 'ctime'
 * time of last status change
 * 'mtime'
 * time of last modification'dev'
 * ID of device containing file'dev''dev'ID of device containing file'ino'
 * inode number'ino''ino'inode number'mode'
 * protection'mode''mode'protection'nlink'
 * number of hard links'nlink''nlink'number of hard links'uid'
 * user ID of owner'uid''uid'user ID of owner'size'
 * total size, in bytes'size''size'total size, in bytes'gid'
 * group ID of owner'gid''gid'group ID of owner'rdev'
 * device ID (if special file)'rdev''rdev'device ID (if special file)'blksize'
 * blocksize for file system I/O'blksize''blksize'blocksize for file system I/O'blocks'
 * number of 512B blocks allocated'blocks''blocks'number of 512B blocks allocated'atime'
 * time of last access'atime''atime'time of last access'ctime'
 * time of last status change'ctime''ctime'time of last status change'mtime'
 * time of last modification'mtime''mtime'time of last modificationSee
 * stat(2)
 * man page for details.stat(2)
 */
function EvStat.attr() {}