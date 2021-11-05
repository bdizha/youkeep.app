<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none">
        <a-row align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <a-row justify="center" align="middle" type="flex">
                  <a-col class="r-text-white" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                      <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h3 class="r-heading-light r-text-uppercase r-text-white">
                          Yes, you keep it
                          <a-icon class="r-text-secondary" type="rocket"></a-icon>
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading r-text-white">
                          <span v-show="isActive(1)" class="r-text-primary r-text-animate">Instant</span>
                          <span v-show="isActive(2)" class="r-text-secondary r-text-animate">Authentic</span>
                          <span v-show="isActive(3)" class="r-text-tertiary r-text-animate">Social</span><br>
                          NFT platform.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[6,6]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading r-text-white">
                              Collect, sell, and keep NFTs
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading r-text-white">
                              powered by
                              <img :style="{height: '24px'}"
                                   src="data:image/svg+xml;base64,PHN2ZwogIHdpZHRoPSIxNjQiCiAgaGVpZ2h0PSIzMSIKICB2aWV3Qm94PSIwIDAgMTY0IDMxIgogIGZpbGw9Im5vbmUiCiAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIgo+CiAgPHBhdGgKICAgIGQ9Ik01NS41NTg5IDE2Ljc4MTFINjEuNzM2N0M2Mi42MDQ1IDE2Ljc4MTEgNjMuMzA4IDE3LjQ4OTggNjMuMzA4IDE4LjM2NDFDNjMuMzA4IDE5LjIzODQgNjIuNjA0NSAxOS45NDcyIDYxLjczNjcgMTkuOTQ3Mkg1NC4yODUyQzU0LjE2ODkgMTkuOTQ3MiA1NC4wNTY0IDE5Ljk4OTEgNTMuOTY4IDIwLjA2NTJMNTEuNzE4MiAyMi4wMDQ1QzUxLjM3MzggMjIuMzAxNCA1MS41ODIxIDIyLjg2OTcgNTIuMDM1NCAyMi44Njk3SDYxLjM2MzZDNjEuMzY3NCAyMi44Njk3IDYxLjM3MDUgMjIuODY2NiA2MS4zNzA1IDIyLjg2MjdDNjEuMzcwNSAyMi44NTg2IDYxLjM3NCAyMi44NTU0IDYxLjM3OCAyMi44NTU3QzYxLjQ5NTQgMjIuODY1IDYxLjYxNCAyMi44Njk3IDYxLjczMzggMjIuODY5N0M2NC4yMDgyIDIyLjg2OTcgNjYuMjE0MiAyMC44NTI1IDY2LjIxNDIgMTguMzY0MUM2Ni4yMTQyIDE2LjAwMTEgNjQuNDA1MyAxNC4wNjMgNjIuMTA0IDEzLjg3MzdDNjIuMTAwMSAxMy44NzM0IDYyLjA5NzEgMTMuODcwMSA2Mi4wOTcxIDEzLjg2NjFDNjIuMDk3MSAxMy44NjE5IDYyLjA5MzcgMTMuODU4NSA2Mi4wODk1IDEzLjg1ODVINTUuNDM0MUM1NC41NjYzIDEzLjg1ODUgNTMuODYyOCAxMy4xNDk4IDUzLjg2MjggMTIuMjc1NUM1My44NjI4IDExLjQwMTIgNTQuNTY2MyAxMC42OTI0IDU1LjQzNDEgMTAuNjkyNEg2Mi44NzUzQzYyLjk5NzggMTAuNjkyNCA2My4xMTU4IDEwLjY0NiA2My4yMDU5IDEwLjU2MjNMNjUuMjk1MSA4LjYyMzA0QzY1LjYyMTkgOC4zMTk2NCA2NS40MDg5IDcuNzY5ODUgNjQuOTY0NCA3Ljc2OTg1SDU1LjU1ODlDNTUuNTU4NSA3Ljc2OTg1IDU1LjU1ODEgNy43NzAyMSA1NS41NTgxIDcuNzcwNjVDNTUuNTU4MSA3Ljc3MTEgNTUuNTU3NyA3Ljc3MTQ2IDU1LjU1NzMgNy43NzE0NEM1NS41MTczIDcuNzcwMzggNTUuNDc3MiA3Ljc2OTg1IDU1LjQzNyA3Ljc2OTg1QzUyLjk2MjUgNy43Njk4NSA1MC45NTY2IDkuNzg3MDggNTAuOTU2NiAxMi4yNzU1QzUwLjk1NjYgMTQuNzYzOCA1Mi45NjI1IDE2Ljc4MTEgNTUuNDM3IDE2Ljc4MTFDNTUuNDc3MiAxNi43ODExIDU1LjUxNzMgMTYuNzgwNSA1NS41NTczIDE2Ljc3OTVDNTUuNTU3NyAxNi43Nzk1IDU1LjU1ODEgMTYuNzc5OCA1NS41NTgxIDE2Ljc4MDNDNTUuNTU4MSAxNi43ODA3IDU1LjU1ODUgMTYuNzgxMSA1NS41NTg5IDE2Ljc4MTFaIgogICAgZmlsbD0id2hpdGUiCiAgLz4KICA8cGF0aAogICAgZD0iTTkxLjU0MDkgNy43Njk4NUM5MS4yNzA5IDcuNzY5ODUgOTEuMDUxOSA3Ljk4OTk2IDkxLjA1MTkgOC4yNjE0OFYyMi4zNzgxQzkxLjA1MTkgMjIuNjQ5NiA5MS4yNzA5IDIyLjg2OTcgOTEuNTQwOSAyMi44Njk3SDEwMi44NTNDMTAyLjk4OCAyMi44Njk3IDEwMy4xMTggMjIuODEzNSAxMDMuMjEgMjIuNzE0NEwxMDQuNjI2IDIxLjE5NkMxMDQuOTE5IDIwLjg4MiAxMDQuNjk3IDIwLjM2ODEgMTA0LjI2OSAyMC4zNjgxSDk0LjM5MjFDOTQuMTIyMSAyMC4zNjgxIDkzLjkwMzEgMjAuMTQ4IDkzLjkwMzEgMTkuODc2NVY4LjI2MTQ4QzkzLjkwMzEgNy45ODk5NiA5My42ODQyIDcuNzY5ODUgOTMuNDE0MSA3Ljc2OTg1SDkxLjU0MDlaIgogICAgZmlsbD0id2hpdGUiCiAgLz4KICA8cGF0aAogICAgZmlsbC1ydWxlPSJldmVub2RkIgogICAgY2xpcC1ydWxlPSJldmVub2RkIgogICAgZD0iTTczLjQyMjQgNy43Njk4NUM3My40MjE2IDcuNzY5ODUgNzMuNDIxIDcuNzcwNDUgNzMuNDIxIDcuNzcxMThDNzMuNDIxIDcuNzcxODkgNzMuNDIwNSA3Ljc3MjQ4IDczLjQxOTggNy43NzI1MUM3MS45NzM5IDcuODM1MTQgNzAuODEyOSA4Ljk5ODY0IDcwLjc1MDQgMTAuNDQ3NkM3MC43NTAzIDEwLjQ0ODMgNzAuNzQ5OCAxMC40NDg5IDcwLjc0OSAxMC40NDg5QzcwLjc0ODYgMTAuNDQ4OSA3MC43NDgzIDEwLjQ0OSA3MC43NDggMTAuNDQ5M0M3MC43NDc4IDEwLjQ0OTYgNzAuNzQ3NyAxMC40NDk5IDcwLjc0NzcgMTAuNDUwMlYxOS45NDU5QzcwLjc0NzcgMTkuOTQ2NiA3MC43NDgzIDE5Ljk0NzIgNzAuNzQ5IDE5Ljk0NzJDNzAuNzQ5NyAxOS45NDcyIDcwLjc1MDMgMTkuOTQ3OCA3MC43NTAzIDE5Ljk0ODVDNzAuNzQ4NiAxOS45ODg0IDcwLjc0NzcgMjAuMDI4NiA3MC43NDc3IDIwLjA2OUM3MC43NDc3IDIxLjU3NDYgNzEuOTMzMiAyMi44MDI3IDczLjQxOTggMjIuODY3MUM3My40MjA1IDIyLjg2NzEgNzMuNDIxIDIyLjg2NzcgNzMuNDIxIDIyLjg2ODRMNzMuNDIxMiAyMi44NjlMNzMuNDIxNSAyMi44Njk0QzczLjQyMTcgMjIuODY5NiA3My40MjIgMjIuODY5NyA3My40MjI0IDIyLjg2OTdIODMuNjg3QzgzLjY4NzggMjIuODY5NyA4My42ODgzIDIyLjg2OTEgODMuNjg4MyAyMi44Njg0TDgzLjY4ODYgMjIuODY3N0w4My42ODkxIDIyLjg2NzJMODMuNjg5NiAyMi44NjcxQzg1LjE3NjIgMjIuODAyNyA4Ni4zNjE3IDIxLjU3NDYgODYuMzYxNyAyMC4wNjlDODYuMzYxNyAyMC4wMjg2IDg2LjM2MDggMTkuOTg4NCA4Ni4zNTkxIDE5Ljk0ODVDODYuMzU5MSAxOS45NDc4IDg2LjM1OTcgMTkuOTQ3MiA4Ni4zNjA0IDE5Ljk0NzJDODYuMzYxMSAxOS45NDcyIDg2LjM2MTcgMTkuOTQ2NiA4Ni4zNjE3IDE5Ljk0NTlWMTAuNDUwMkM4Ni4zNjE3IDEwLjQ0OTUgODYuMzYxMSAxMC40NDg5IDg2LjM2MDMgMTAuNDQ4OUM4Ni4zNTk2IDEwLjQ0ODkgODYuMzU5MSAxMC40NDgzIDg2LjM1OSAxMC40NDc2Qzg2LjI5NjUgOC45OTg2NCA4NS4xMzU1IDcuODM1MTQgODMuNjg5NiA3Ljc3MjUxQzgzLjY4ODkgNy43NzI0OCA4My42ODgzIDcuNzcxODkgODMuNjg4MyA3Ljc3MTE4QzgzLjY4ODMgNy43NzA0NSA4My42ODc4IDcuNzY5ODUgODMuNjg3IDcuNzY5ODVINzMuNDIyNFpNNzUuMzM1NyAxMC40NDg5TDc1LjMzNTEgMTAuNDQ5Mkw3NS4zMzQ5IDEwLjQ0OTdDNzUuMzM0OSAxMC40NTAxIDc1LjMzNDYgMTAuNDUwNSA3NS4zMzQxIDEwLjQ1MDVDNzQuNDMwNCAxMC40ODk5IDczLjcwNDggMTEuMjIxOCA3My42NjU3IDEyLjEzMzNDNzMuNjY1NyAxMi4xMzM3IDczLjY2NTQgMTIuMTM0MSA3My42NjQ5IDEyLjEzNDFDNzMuNjY0NSAxMi4xMzQxIDczLjY2NDEgMTIuMTM0NCA3My42NjQxIDEyLjEzNDlWMTguMTA4QzczLjY2NDEgMTguMTA4NCA3My42NjQ0IDE4LjEwODggNzMuNjY0OSAxOC4xMDg4QzczLjY2NTMgMTguMTA4OCA3My42NjU3IDE4LjEwOTIgNzMuNjY1NyAxOC4xMDk2QzczLjY2NDYgMTguMTM0OCA3My42NjQxIDE4LjE2IDczLjY2NDEgMTguMTg1NEM3My42NjQxIDE5LjEzMjUgNzQuNDA1IDE5LjkwNSA3NS4zMzQxIDE5Ljk0NTVDNzUuMzM0NiAxOS45NDU1IDc1LjMzNDkgMTkuOTQ1OSA3NS4zMzQ5IDE5Ljk0NjNMNzUuMzM1MSAxOS45NDY4TDc1LjMzNTMgMTkuOTQ3MUw3NS4zMzU3IDE5Ljk0NzJIODEuNzczN0w4MS43NzQgMTkuOTQ3MUw4MS43NzQ0IDE5Ljk0NjhMODEuNzc0NSAxOS45NDYzQzgxLjc3NDUgMTkuOTQ1OSA4MS43NzQ5IDE5Ljk0NTUgODEuNzc1MyAxOS45NDU1QzgyLjcwNDQgMTkuOTA1IDgzLjQ0NTMgMTkuMTMyNSA4My40NDUzIDE4LjE4NTRDODMuNDQ1MyAxOC4xNiA4My40NDQ4IDE4LjEzNDggODMuNDQzNyAxOC4xMDk2TDgzLjQ0MzggMTguMTA5NEw4My40NDM5IDE4LjEwOTJMODMuNDQ0NSAxOC4xMDg4QzgzLjQ0NSAxOC4xMDg4IDgzLjQ0NTMgMTguMTA4NCA4My40NDUzIDE4LjEwOFYxMi4xMzQ5QzgzLjQ0NTMgMTIuMTM0NCA4My40NDUgMTIuMTM0MSA4My40NDQ1IDEyLjEzNDFDODMuNDQ0MSAxMi4xMzQxIDgzLjQ0MzcgMTIuMTMzNyA4My40NDM3IDEyLjEzMzNDODMuNDA0NiAxMS4yMjE4IDgyLjY3OSAxMC40ODk5IDgxLjc3NTMgMTAuNDUwNUM4MS43NzQ5IDEwLjQ1MDUgODEuNzc0NSAxMC40NTAxIDgxLjc3NDUgMTAuNDQ5N0w4MS43NzQ0IDEwLjQ0OTNMODEuNzc0MSAxMC40NDlMODEuNzczNyAxMC40NDg5SDc1LjMzNTdaIgogICAgZmlsbD0id2hpdGUiCiAgLz4KICA8cGF0aAogICAgZmlsbC1ydWxlPSJldmVub2RkIgogICAgY2xpcC1ydWxlPSJldmVub2RkIgogICAgZD0iTTEyMS4wNzYgMjIuMzc4MUMxMjEuMDc2IDIyLjY0OTYgMTIxLjI5MyAyMi44Njk3IDEyMS41NjEgMjIuODY5N0gxMjMuNDc5QzEyMy43NDcgMjIuODY5NyAxMjMuOTY0IDIyLjY0OTYgMTIzLjk2NCAyMi4zNzgxVjEwLjY5MzdDMTIzLjk2NCAxMC42OTMgMTIzLjk2NCAxMC42OTI0IDEyMy45NjMgMTAuNjkyNEwxMjMuOTYyIDEwLjY5MjNMMTIzLjk2MiAxMC42OTIxQzEyMy45NjIgMTAuNjkxOCAxMjMuOTYyIDEwLjY5MTUgMTIzLjk2MiAxMC42OTExQzEyMy45NjMgMTAuNjUxMSAxMjMuOTY0IDEwLjYxMSAxMjMuOTY0IDEwLjU3MDZDMTIzLjk2NCA5LjA2NTA0IDEyMi43OSA3LjgzNjkxIDEyMS4zMTggNy43NzI1MUMxMjEuMzE3IDcuNzcyNDggMTIxLjMxNiA3Ljc3MTg5IDEyMS4zMTYgNy43NzExOEMxMjEuMzE2IDcuNzcwNDUgMTIxLjMxNiA3Ljc2OTg1IDEyMS4zMTUgNy43Njk4NUgxMTEuNDYxQzExMS40NiA3Ljc2OTg1IDExMS40NTkgNy43NzA0MiAxMTEuNDU5IDcuNzcxMTJDMTExLjQ1OSA3Ljc3MTg1IDExMS40NTkgNy43NzI0MyAxMTEuNDU4IDcuNzcyNEMxMTEuNDE5IDcuNzcwNzEgMTExLjM3OSA3Ljc2OTg1IDExMS4zMzkgNy43Njk4NUMxMDkuODEgNy43Njk4NSAxMDguNTcxIDkuMDIzODEgMTA4LjU3MSAxMC41NzA2QzEwOC41NzEgMTAuNjExIDEwOC41NzIgMTAuNjUxMSAxMDguNTczIDEwLjY5MTFDMTA4LjU3MyAxMC42OTE4IDEwOC41NzMgMTAuNjkyNCAxMDguNTcyIDEwLjY5MjRDMTA4LjU3MSAxMC42OTI0IDEwOC41NzEgMTAuNjkzIDEwOC41NzEgMTAuNjkzN1YyMi4zNzgxQzEwOC41NzEgMjIuNjQ5NiAxMDguNzg4IDIyLjg2OTcgMTA5LjA1NiAyMi44Njk3SDExMC45NzRDMTExLjI0MiAyMi44Njk3IDExMS40NTkgMjIuNjQ5NiAxMTEuNDU5IDIyLjM3ODFWMTcuNTE2MkMxMTEuNDU5IDE3LjI0NDcgMTExLjY3NiAxNy4wMjQ2IDExMS45NDQgMTcuMDI0NkgxMjAuNTkxQzEyMC44NTggMTcuMDI0NiAxMjEuMDc2IDE3LjI0NDcgMTIxLjA3NiAxNy41MTYyVjIyLjM3ODFaTTExMS40NTkgMTQuMzQxMVYxMS45MTAxQzExMS40NTkgMTAuOTY4NiAxMTIuMjE0IDEwLjIwNTMgMTEzLjE0NCAxMC4yMDUzSDExOS4zOTFDMTIwLjMyMSAxMC4yMDUzIDEyMS4wNzYgMTAuOTY4NiAxMjEuMDc2IDExLjkxMDFWMTQuMzQxMUMxMjEuMDc2IDE0LjYxMjYgMTIwLjg1OCAxNC44MzI3IDEyMC41OTEgMTQuODMyN0gxMTEuOTQ0QzExMS42NzYgMTQuODMyNyAxMTEuNDU5IDE0LjYxMjYgMTExLjQ1OSAxNC4zNDExWiIKICAgIGZpbGw9IndoaXRlIgogIC8+CiAgPHBhdGgKICAgIGZpbGwtcnVsZT0iZXZlbm9kZCIKICAgIGNsaXAtcnVsZT0iZXZlbm9kZCIKICAgIGQ9Ik0xNjEuNTczIDIyLjg2OTdDMTYxLjMwMyAyMi44Njk3IDE2MS4wODQgMjIuNjQ5NiAxNjEuMDg0IDIyLjM3ODFWMTcuNTE2MkMxNjEuMDg0IDE3LjI0NDcgMTYwLjg2NCAxNy4wMjQ2IDE2MC41OTQgMTcuMDI0NkgxNTEuODUyQzE1MS41ODIgMTcuMDI0NiAxNTEuMzYzIDE3LjI0NDcgMTUxLjM2MyAxNy41MTYyVjIyLjM3ODFDMTUxLjM2MyAyMi42NDk2IDE1MS4xNDMgMjIuODY5NyAxNTAuODczIDIyLjg2OTdIMTQ4LjkzNkMxNDguNjY1IDIyLjg2OTcgMTQ4LjQ0NiAyMi42NDk2IDE0OC40NDYgMjIuMzc4MVYxMC42OTM3TDE0OC40NDYgMTAuNjkzM0wxNDguNDQ2IDEwLjY5MjlDMTQ4LjQ0NyAxMC42OTI2IDE0OC40NDcgMTAuNjkyNCAxNDguNDQ3IDEwLjY5MjRDMTQ4LjQ0OCAxMC42OTI0IDE0OC40NDkgMTAuNjkxOCAxNDguNDQ5IDEwLjY5MTFDMTQ4LjQ0NyAxMC42NTExIDE0OC40NDYgMTAuNjExIDE0OC40NDYgMTAuNTcwNkMxNDguNDQ2IDkuMDIzODEgMTQ5LjY5NyA3Ljc2OTg1IDE1MS4yNDEgNy43Njk4NUMxNTEuMjgxIDcuNzY5ODUgMTUxLjMyMSA3Ljc3MDcxIDE1MS4zNjEgNy43NzI0QzE1MS4zNjIgNy43NzI0MyAxNTEuMzYzIDcuNzcxODUgMTUxLjM2MyA3Ljc3MTEyQzE1MS4zNjMgNy43NzA0MiAxNTEuMzYzIDcuNzY5ODUgMTUxLjM2NCA3Ljc2OTg1TDE2MS4zMjUgNy43Njk4NUMxNjEuMzI2IDcuNzY5ODUgMTYxLjMyNyA3Ljc3MDQ1IDE2MS4zMjcgNy43NzExOEMxNjEuMzI3IDcuNzcxODkgMTYxLjMyNyA3Ljc3MjQ4IDE2MS4zMjggNy43NzI1MUMxNjIuODE1IDcuODM2OTEgMTY0IDkuMDY1MDQgMTY0IDEwLjU3MDZDMTY0IDEwLjYxMSAxNjMuOTk5IDEwLjY1MTEgMTYzLjk5NyAxMC42OTExQzE2My45OTcgMTAuNjkxOCAxNjMuOTk4IDEwLjY5MjQgMTYzLjk5OSAxMC42OTI0QzE2My45OTkgMTAuNjkyNCAxNjMuOTk5IDEwLjY5MjYgMTY0IDEwLjY5MjhDMTY0IDEwLjY5MyAxNjQgMTAuNjkzMyAxNjQgMTAuNjkzN1YyMi4zNzgxQzE2NCAyMi42NDk2IDE2My43ODEgMjIuODY5NyAxNjMuNTEgMjIuODY5N0gxNjEuNTczWk0xNTEuMzYzIDExLjkxMDFWMTQuMzQxMUMxNTEuMzYzIDE0LjYxMjYgMTUxLjU4MiAxNC44MzI3IDE1MS44NTIgMTQuODMyN0gxNjAuNTk0QzE2MC44NjQgMTQuODMyNyAxNjEuMDg0IDE0LjYxMjYgMTYxLjA4NCAxNC4zNDExVjExLjkxMDFDMTYxLjA4NCAxMC45Njg2IDE2MC4zMjIgMTAuMjA1MyAxNTkuMzgyIDEwLjIwNTNIMTUzLjA2NEMxNTIuMTI0IDEwLjIwNTMgMTUxLjM2MyAxMC45Njg2IDE1MS4zNjMgMTEuOTEwMVoiCiAgICBmaWxsPSJ3aGl0ZSIKICAvPgogIDxwYXRoCiAgICBkPSJNMTMxLjE4NiA3Ljc2OTg1QzEzMS4zMjggNy43Njk4NSAxMzEuNDYyIDcuODMyOTQgMTMxLjU1NSA3Ljk0MjQ3TDE0MC4xNTkgMTguMTk5NkMxNDAuNDUyIDE4LjU0NzMgMTQxLjAxMyAxOC4zMzc2IDE0MS4wMTMgMTcuODgwNlY4LjI2MTQ4QzE0MS4wMTMgNy45ODk5NiAxNDEuMjMgNy43Njk4NSAxNDEuNDk4IDcuNzY5ODVIMTQzLjQxN0MxNDMuNjg0IDcuNzY5ODUgMTQzLjkwMiA3Ljk4OTk2IDE0My45MDIgOC4yNjE0OFYyMi4zNzgxQzE0My45MDIgMjIuNjQ5NiAxNDMuNjg0IDIyLjg2OTcgMTQzLjQxNyAyMi44Njk3SDE0MS4wMzFDMTQxLjAyMSAyMi44Njk3IDE0MS4wMTMgMjIuODYxNSAxNDEuMDEzIDIyLjg1MTRDMTQxLjAxMyAyMi44NDY5IDE0MS4wMTEgMjIuODQyNiAxNDEuMDA4IDIyLjgzOTNMMTMyLjI2IDEyLjY1MzdDMTMxLjk2NSAxMi4zMTE2IDEzMS40MDkgMTIuNTIyOSAxMzEuNDA5IDEyLjk3NzFWMjIuMzc4MUMxMzEuNDA5IDIyLjY0OTYgMTMxLjE5MiAyMi44Njk3IDEzMC45MjQgMjIuODY5N0gxMjguOTkzQzEyOC43MjYgMjIuODY5NyAxMjguNTA4IDIyLjY0OTYgMTI4LjUwOCAyMi4zNzgxVjguMjYxNDhDMTI4LjUwOCA3Ljk4OTk2IDEyOC43MjYgNy43Njk4NSAxMjguOTkzIDcuNzY5ODVIMTMxLjE4NloiCiAgICBmaWxsPSJ3aGl0ZSIKICAvPgogIDxwYXRoCiAgICBkPSJNNi4zNTQgMjMuMzg5NkM2LjU5MzIzIDIzLjE1MDYgNi45MTc1OCAyMy4wMTYzIDcuMjU1NzYgMjMuMDE2M0gzOC40NTlDMzkuMDI3NSAyMy4wMTYzIDM5LjMxMiAyMy43MDM3IDM4LjkwOTkgMjQuMTA1NUwzMi43NDQyIDMwLjI2NjNDMzIuNTA1IDMwLjUwNTMgMzIuMTgwNiAzMC42Mzk2IDMxLjg0MjQgMzAuNjM5NkgwLjYzOTE3NUMwLjA3MDc0ODUgMzAuNjM5NiAtMC4yMTM4MDUgMjkuOTUyMiAwLjE4ODI5NCAyOS41NTA0TDYuMzU0IDIzLjM4OTZaIgogICAgZmlsbD0idXJsKCNwYWludDBfbGluZWFyKSIKICAvPgogIDxwYXRoCiAgICBkPSJNNi4zNTQgMC4zNzMzMTFDNi41OTMyMyAwLjEzNDI3NCA2LjkxNzU4IDAgNy4yNTU3NiAwSDM4LjQ1OUMzOS4wMjc1IDAgMzkuMzEyIDAuNjg3MzU3IDM4LjkwOTkgMS4wODkxNEwzMi43NDQyIDcuMjQ5OTNDMzIuNTA1IDcuNDg4OTcgMzIuMTgwNiA3LjYyMzI0IDMxLjg0MjQgNy42MjMyNEgwLjYzOTE3NUMwLjA3MDc0ODUgNy42MjMyNCAtMC4yMTM4MDUgNi45MzU4OSAwLjE4ODI5NCA2LjUzNDExTDYuMzU0IDAuMzczMzExWiIKICAgIGZpbGw9InVybCgjcGFpbnQxX2xpbmVhcikiCiAgLz4KICA8cGF0aAogICAgZD0iTTMyLjc0NDIgMTEuODA4MkMzMi41MDUgMTEuNTY5MSAzMi4xODA2IDExLjQzNDkgMzEuODQyNCAxMS40MzQ5SDAuNjM5MTc1QzAuMDcwNzQ4MyAxMS40MzQ5IC0wLjIxMzgwNSAxMi4xMjIyIDAuMTg4Mjk0IDEyLjUyNEw2LjM1NCAxOC42ODQ4QzYuNTkzMjMgMTguOTIzOCA2LjkxNzU4IDE5LjA1ODEgNy4yNTU3NiAxOS4wNTgxSDM4LjQ1OUMzOS4wMjc1IDE5LjA1ODEgMzkuMzEyIDE4LjM3MDcgMzguOTA5OSAxNy45NjlMMzIuNzQ0MiAxMS44MDgyWiIKICAgIGZpbGw9InVybCgjcGFpbnQyX2xpbmVhcikiCiAgLz4KICA8ZGVmcz4KICAgIDxsaW5lYXJHcmFkaWVudAogICAgICBpZD0icGFpbnQwX2xpbmVhciIKICAgICAgeDE9IjI2LjQzMjciCiAgICAgIHkxPSItOC40MDQ2MSIKICAgICAgeDI9IjQuODM3MzciCiAgICAgIHkyPSIzMi45NTkxIgogICAgICBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIKICAgID4KICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzAwRkZBMyIgLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjREMxRkZGIiAvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDxsaW5lYXJHcmFkaWVudAogICAgICBpZD0icGFpbnQxX2xpbmVhciIKICAgICAgeDE9IjI2LjQzMjciCiAgICAgIHkxPSItOC40MDQ2MSIKICAgICAgeDI9IjQuODM3MzciCiAgICAgIHkyPSIzMi45NTkxIgogICAgICBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIKICAgID4KICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzAwRkZBMyIgLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjREMxRkZGIiAvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDxsaW5lYXJHcmFkaWVudAogICAgICBpZD0icGFpbnQyX2xpbmVhciIKICAgICAgeDE9IjI2LjQzMjciCiAgICAgIHkxPSItOC40MDQ2MSIKICAgICAgeDI9IjQuODM3MzciCiAgICAgIHkyPSIzMi45NTkxIgogICAgICBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIKICAgID4KICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzAwRkZBMyIgLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjREMxRkZGIiAvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICA8L2RlZnM+Cjwvc3ZnPgo="
                                   alt=""
                              >
                            </h4>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                          <a-col :lg="{ span: 9 }" :md="{ span: 12 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <r-link route="/shop" title="Explore" size="large" theme="primary"></r-link>
                          </a-col>
                          <a-col :lg="{ span: 9 }" :md="{ span: 12 }"
                                 :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                          >
                            <r-button title="Create" size="large" action="register" theme="bordered-secondary"
                            ></r-button>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col class="r-text-left" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <r-slider :images="images"></r-slider>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-metrics></r-metrics>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <r-product-metric :is-drop="true" :filters="{}"></r-product-metric>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-category-tabs></r-category-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-rankings></r-rankings>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-steps :size="16"></r-customer-steps>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-customer-welcome></r-customer-welcome>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-testimonials></r-testimonials>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-seller-featured></r-seller-featured>
    </a-col>
    <a-col v-if="false" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-row align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-dark r-pull-h-24 r-border-none">
                <div class="r-mv-48">
                  <a-row align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[96,48]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <div class="r-mv-48">
                            <a-row :gutter="[48,24]" align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h1 class="r-heading r-text-primary">
                                  Discover great <br>value
                                </h1>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-medium r-text-primary">
                                          Personalized Discovery
                                        </p>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal r-text-primary">
                                          Discover brands and products faster with a buyer homepage that highlights
                                          trends,
                                          collections, and more in a single place.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-medium r-text-primary">
                                          Top trending products
                                        </p>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal">
                                          View products that are trending in Nielsen category sales, or showing
                                          follower growth
                                          on Instagram.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-medium r-text-primary">
                                          Curated Collections
                                        </p>
                                      </a-col>
                                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                             :sm="{ span: 24 }"
                                             :xs="{ span: 24 }"
                                      >
                                        <p class="r-text-normal">
                                          Review curated brands and products in your category with trending
                                          collections like
                                          diversity and sustainability.
                                        </p>
                                      </a-col>
                                    </a-row>
                                  </a-col>
                                </a-row>
                              </a-col>
                              <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                                     :sm="{ span: 12 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-button class="r-btn-primary"
                                          @click="onModal"
                                          block
                                          size="large"
                                          type="blue"
                                >
                                  Get started
                                </a-button>
                              </a-col>
                            </a-row>
                          </div>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card class="r-bg-dark r-pull-h-24 r-border-none">
                <div class="r-mv-48">
                  <a-row :gutter="[48,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[96,48]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <r-avatar data-src="/images/content/step-seller-03-primary.png" :size="300"
                                    class="r-avatar-block"
                          ></r-avatar>
                        </a-col>
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                               :xs="{ span: 24}"
                        >
                          <div class="r-mv-48">
                            <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
                              <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <h1 class="r-heading r-text-secondary">
                                  Up-scale your sales
                                </h1>
                              </a-col>
                              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                     :sm="{ span: 24 }"
                                     :xs="{ span: 24 }"
                              >
                                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-white">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <h4 class="r-heading-light r-text-secondary">
                                            farm profile
                                          </h4>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal">
                                            Build visibility with leading retailers and NFTs outlets by highlighting key
                                            brand
                                            information that shoppers look for.
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-white">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-medium r-text-secondary">
                                            Product Pages
                                          </p>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal">
                                            Customize product pages to show shoppers essential product and company
                                            details
                                            like MSRP, price margins, packaging dimensions, and more.
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-card class="r-bg-white">
                                      <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-medium r-text-secondary">
                                            Profile Sharing
                                          </p>
                                        </a-col>
                                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                               :sm="{ span: 24 }"
                                               :xs="{ span: 24 }"
                                        >
                                          <p class="r-text-normal">
                                            Share your farm profile with shoppers on and off of AddTract and track
                                            engagement
                                          </p>
                                        </a-col>
                                      </a-row>
                                    </a-card>
                                  </a-col>
                                  <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                                         :sm="{ span: 12 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <a-button class="r-btn-secondary"
                                              @click="onModal"
                                              block
                                              size="large"
                                              type="blue"
                                    >
                                      Get started
                                    </a-button>
                                  </a-col>
                                </a-row>
                              </a-col>
                            </a-row>
                          </div>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </div>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-card class="r-bg-dark r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row class="r-text-left" :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading r-text-primary">
                        It's easy to get started.
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 15 }" :md="{ span: 16 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium">
                        Signing up with Youkeep is simple and only takes a few minutes. Discover new products. Start
                        connecting.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" class="r-text-left" justify="center" type="flex">
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-left" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-checked-item-text">
                                Create an account
                                </span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              Choose to be a Youkeep Seller today and start achieving your goals.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-left" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-checked-item-text">
                                 Setup your store
                                </span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              Your categories are showcased on our platform to relevant shoppers.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                    <a-col :lg="{ span: 8 }" :sm="{ span: 8 }" :xs="{ span: 24 }">
                      <a-card class="r-bg-white">
                        <a-row :gutter="[12,12]" class="r-text-left r-text-secondary" justify="center" type="flex">
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <h4 class="r-heading r-text-primary">
                              <a-icon class="r-checked-item-icon" type="check"/>
                              <span class="r-checked-item-text">
                                Start accepting orders
                                </span>
                            </h4>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                            <p class="r-text-medium">
                              Seamlessly sell products that meet your customer's unique demands.
                            </p>
                          </a-col>
                        </a-row>
                      </a-card>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-contact-us title="Take your artistic taste to the next level."></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
import { setInterval } from 'timers'
import RMetrics from '../components/global/Metrics'

export default {
  components: { RMetrics },
  layout: 'default',
  props: {},
  async asyncData ({ store }) {
    await store.dispatch('content/onTestimonials', {})
  },
  data () {
    return {
      images: [
        '/assets/asset-06.svg',
        '/assets/asset-07.svg',
        '/assets/asset-08.svg',
        '/assets/asset-09.svg',
        '/assets/asset-10.svg',
        '/assets/asset-11.svg',
        '/assets/asset-12.svg',
        '/assets/asset-13.svg',
        '/assets/asset-14.svg',
        '/assets/asset-15.svg',
        '/assets/asset-16.svg',
        '/assets/asset-17.svg'
      ],
      step: 1,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: false,
        responsive: [
          {
            'breakpoint': 1024,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 900,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 700,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          },
          {
            'breakpoint': 560,
            'settings': {
              'slidesToShow': 1,
              'slidesToScroll': 1,
              'dots': false
            }
          }
        ]
      },
      modal: {
        current: null,
        isVisible: false
      },
      hasData: false
    }
  },
  computed: {},
  async created () {
    await this.rotate()
  },
  methods: {
    isActive (step) {
      return step === this.step
    },
    getCardClass (item) {
      return `r-bg-${item.theme}`
    },
    getShapeClass (theme) {
      return `r-bg-${theme}`
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    },
    rotate () {
      setInterval(() => {
        this.step = this.step > 2 ? 1 : this.step + 1
      }, 3000)
    }
  }
}
</script>
